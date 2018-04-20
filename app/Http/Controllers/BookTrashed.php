<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\BookCategory;

class BookTrashed extends Controller
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
      ->onlyTrashed()
      ->get();
      return view('admin.layouts.book.trash.view', compact('activeBooks', 'getBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        ->onlyTrashed()
        ->findOrFail($id);
        $getAuthors = Author::get();
        $getBookCategories = BookCategory::get();
        return view('admin.layouts.book.trash.edit', compact('activeBooks', 'book', 'getAuthors', 'getBookCategories'));
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
      $book = Book::withTrashed()->findOrFail($id)->restore();
      return redirect('/trashedBook')->with("success_status", "Book Restored");
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
