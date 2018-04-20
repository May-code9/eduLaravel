<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookCategory;

class BookCategoryTrashed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activeCategory = "active";
      $getBookCategories = BookCategory::join('users', 'users.id', '=', 'book_categories.user_id')
      ->select('book_categories.id', 'first_name', 'last_name', 'book_category')
      ->onlyTrashed()
      ->get();
      return view('admin.layouts.category.trash.view', compact('activeCategory', 'getBookCategories'));
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
      $activeCategory = "active";
      $bookCategory = BookCategory::onlyTrashed()->findOrFail($id);
      return view('admin.layouts.category.trash.edit', compact('activeCategory', 'bookCategory'));
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
        $bookCategory = BookCategory::withTrashed()->findOrFail($id)->restore();
        return redirect('/trashedBookCategory')->with("success_status", "Book Category Restored");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookCategory = BookCategory::withTrashed()->findOrFail($id)->forceDelete();
        return redirect('/trashedBookCategory')->with("failure_status", "Book Category Deleted");
    }
}
