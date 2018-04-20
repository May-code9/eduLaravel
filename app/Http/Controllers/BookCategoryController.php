<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookCategory;

class BookCategoryController extends Controller
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
      ->paginate(5);
      return view('admin.layouts.category.view', compact('activeCategory', 'getBookCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $activeCategory = 'active';
      return view('admin.layouts.category.add', compact('activeCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BookCategory::create($request->all());
        return redirect()->back()->with("success_status", "Book Category Added");
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
        $bookCategory = BookCategory::findOrFail($id);
        return view('admin.layouts.category.edit', compact('activeCategory', 'bookCategory'));

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
        $bookCategory = BookCategory::findOrFail($id);
        $bookCategory->update($request->all());
        return redirect('/bookCategory')->with('success_status', 'Book Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       BookCategory::destroy($id);
       return redirect('/bookCategory')->with('failure_status', 'Book Category Moved to Trash');
    }
}
