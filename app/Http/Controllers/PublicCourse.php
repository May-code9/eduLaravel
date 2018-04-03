<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class PublicCourse extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $courses = Course::join('schools', 'schools.id', '=', 'courses.school_id')
      ->join('contents', 'contents.id', '=', 'contents.course_id')
      ->select('courses.id', 'course', 'about_course', 'course_image', 'name', 'category_id',
       'week_no', 'content_title', 'content_pdf', 'content_text', 'content_image', 'content_video')
      ->get();

      //dd($courses);
      $coursesActive = "active";
      return view('public.courses', compact('coursesActive', 'courses'));
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
      $courses = Course::join('schools', 'schools.id', '=', 'courses.school_id')
      ->join('contents', 'contents.id', '=', 'contents.course_id')
      ->select('courses.id', 'course', 'about_course', 'course_image', 'name', 'category_id',
       'week_no', 'content_title', 'content_pdf', 'content_text', 'content_image', 'content_video')
      ->find($id);
      //$content = Course::find($id);
      $coursesActive = "active";
      return view('public.icourse', compact('coursesActive', 'content'));
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
