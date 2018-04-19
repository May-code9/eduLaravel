<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorTrashed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activeAuthors = "active";
      $getAuthors = Author::join('users', 'users.id', '=', 'authors.user_id')
      ->select('authors.id', 'first_name', 'last_name', 'author_name', 'about_author', 'author_image')
      ->onlyTrashed()
      ->get();
      return view('admin.layouts.author.trash.view', compact('activeAuthors', 'getAuthors'));
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
      $author = Author::onlyTrashed()->findOrFail($id);

      $activeAuthor = 'active';
      return view('admin.layouts.author.trash.edit', compact('activeAuthor', 'author'));
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
      $author = Author::withTrashed()->findOrFail($id)->restore();
      return redirect('/trashedAuthor')->with("success_status", "Author Restored");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $author = Author::withTrashed()->findOrFail($id);
      $author->forceDelete();
      return redirect('/trashedAuthor')->with("failure_status", "Author Deleted");
    }
}
