<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\BookCategory;

class PublicBookController extends Controller
{
    public function bookshop()
    {
      $bookshopActive = "active";
      $getBookCategories = BookCategory::pluck('book_category');
      $getNewReleases = Book::join('authors', 'authors.id', '=', 'books.author_id')
      ->get();
      return view('public.bookshop', compact('bookshopActive', 'getBookCategories', 'getNewReleases'));
    }
}
