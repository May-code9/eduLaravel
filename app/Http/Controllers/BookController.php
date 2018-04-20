<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\BookCategory;
use Image;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activeBooks = 'active';
        $getBooks = Book::join('users', 'users.id', '=', 'books.user_id')
        ->join('authors', 'authors.id', '=', 'books.author_id')
        ->join('book_categories', 'book_categories.id', '=', 'books.book_category_id')
        ->select('books.id', 'first_name', 'last_name', 'author_name', 'author_id', 'book_name', 'about_book', 'book_category_id', 'book_pdf', 'book_image', 'book_category', 'book_cost')
        ->get();
        return view('admin.layouts.book.view', compact('activeBooks', 'getBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activeBooks = 'active';
        $getAuthors = Author::get();
        $getBookCategories = BookCategory::get();
        return view('admin.layouts.book.add', compact('activeBooks', 'getAuthors', 'getBookCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'book_pdf' => 'required|mimes:pdf',
        'book_image' => 'nullable|mimes:jpeg,png|max:1000',
      ]);

      //Add Book Pdf
      $pdf = $request->file('book_pdf');
      $uniqueFileName = uniqid() . $pdf->getClientOriginalName();
      $pdfPath = public_path('/pdf');
      $pdf->move($pdfPath, $uniqueFileName);

    //add Book Image
      $photo = $request->file('book_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/books');
      $thumb_img = Image::make($photo->getRealPath())->resize(600, 600);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $book = $request->all();
      $book['book_image'] = $imagename;

      $book['book_pdf'] = $uniqueFileName;

      Book::create($book);
      return redirect()->back()->with("success_status", "Book Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activeBooks = "active";
        $book = Book::join('users', 'users.id', '=', 'books.user_id')
        ->join('authors', 'authors.id', '=', 'books.author_id')
        ->join('book_categories', 'book_categories.id', '=', 'books.book_category_id')
        ->select('books.id', 'first_name', 'last_name', 'author_name', 'author_id', 'book_name', 'about_book', 'book_category_id', 'book_pdf', 'book_image', 'book_category', 'book_cost')
        ->findOrFail($id);
        $getAuthors = Author::get();
        $getBookCategories = BookCategory::get();

        return view('admin.layouts.book.edit', compact('activeBooks', 'getAuthors', 'getBookCategories', 'book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $bookName = $request->input('book_name');
        $authorName = $request->input('author_name');
        $aboutBook = $request->input('about_book');
        $bookCategoryId = $request->input('book_category_id');
        $bookCost = $request->input('book_cost');
        $userId = $request->input('user_id');

        $book->update(['book_name'=>$bookName, 'author_name'=>$authorName,
        'about_book'=>$aboutBook, 'book_category_id'=>$bookCategoryId, 'user_id'=>$userId, 'book_cost'=>$bookCost ]);

        return redirect('/book')->with("success_status", "Book Updated ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect('/book')->with('failure_status', 'Book Moved to Trash');
    }
}
