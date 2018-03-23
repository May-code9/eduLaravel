<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseTrashed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activeCourse = "active";
      $getCourses = Course::join('users', 'users.id', '=', 'courses.user_id')
      ->join('schools', 'schools.id', '=', 'courses.school_id')
      ->join('instructors', 'instructors.id', '=', 'courses.instructor_id')
      ->select('courses.id', 'name', 'course', 'total_weeks', 'about_course', 'instructor', 'instructor_id', 'school_id', 'first_name', 'last_name')
      ->onlyTrashed()
      ->get();

      return view('admin.layouts.course.trash.view', compact('activeCourse', 'getCourses'));
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
      $course = Course::join('users', 'users.id', '=', 'courses.user_id')
      ->join('schools', 'schools.id', '=', 'courses.school_id')
      ->join('instructors', 'instructors.id', '=', 'courses.instructor_id')
      ->select('courses.id', 'name', 'course', 'total_weeks', 'about_course', 'instructor', 'instructor_id', 'school_id', 'first_name', 'last_name')
      ->onlyTrashed()
      ->findOrFail($id);

      $activeCourse = "active";
      return view('admin.layouts.course.trash.edit', compact('course', 'activeCourse'));
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
      $course = Course::withTrashed()->findOrFail($id)->restore();
      return redirect('/trashedCourse')->with("success_status", "Course Restored");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $course = Course::withTrashed()->findOrFail($id);
      $course->forceDelete();
      return redirect('/trashedCourse')->with("failure_status", "Course Deleted from Trash");
    }
}
