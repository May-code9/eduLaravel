<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Content;
use App\Category;

class ContentTrashed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activeContent = "active";
      $getContents = Content::join('users', 'users.id', '=', 'contents.user_id')
      ->join('courses', 'courses.id', '=', 'contents.course_id')
      ->join('categories', 'categories.id', '=', 'contents.category_id')
      ->select('contents.id', 'course', 'category', 'content_title', 'content_text', 'content_pdf', 'content_video', 'content_image', 'week_no', 'first_name', 'last_name')
      ->orderBy('contents.id')
      ->onlyTrashed()
      ->get();
      //dd($getContents);

      $activeContent = 'active';
      return view('admin.layouts.content.trash.view', compact('getContents', 'activeContent'));
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
      $activeContent = "active";
      $getContents = Content::join('users', 'users.id', '=', 'contents.user_id')
      ->join('courses', 'courses.id', '=', 'contents.course_id')
      ->join('categories', 'categories.id', '=', 'contents.category_id')
      ->select('contents.id', 'course', 'course_id', 'category', 'content_title', 'content_text', 'content_pdf', 'content_video', 'content_image', 'week_no', 'first_name', 'last_name')
      ->onlyTrashed()
      ->findOrFail($id);

      $courseIds = Course::get();
      $categories = Category::get();

      $activeContent = 'active';
      return view('admin.layouts.content.trash.edit', compact('getContents', 'activeContent', 'courseIds', 'categories'));
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
      $getContents = Content::withTrashed()->findOrFail($id)->restore();
      return redirect('/trashedContent')->with("success_status", "Content Restored");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $getContents = Content::withTrashed()->findOrFail($id);
      $getContents->forceDelete();
      return redirect('/trashedContent')->with("failure_status", "Content Deleted");
    }
}
