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
      $thumb_img = Image::make($photo->getRealPath())->resize(700, 600);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
