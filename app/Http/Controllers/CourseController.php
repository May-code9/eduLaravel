<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Week;
use App\Course;
use App\School;
use App\Instructor;

class CourseController extends Controller
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
      ->select('courses.id', 'name', 'course', 'course_image', 'total_weeks', 'about_course', 'instructor', 'instructor_id', 'school_id', 'first_name', 'last_name')
      ->orderBy('courses.id')
      ->get();

      return view('admin.layouts.course.view', compact('activeCourse', 'getCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructor_ids = Instructor::get();
        $school_ids = School::get();

        $activeCourse = "active";
        return view('admin.layouts.course.add', compact('instructor_ids', 'school_ids', 'activeCourse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = $request->file('course_image');
        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $destinationPath = public_path('/images/course');
        $thumb_img = Image::make($photo->getRealPath())->resize(400, 400);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $course = $request->all();
        $course['course_image'] = $imagename;

        Course::create($course);

        //Course::create($request->all());
        return redirect()->back()->with('success_status', 'Course Added');
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
        ->findOrFail($id);

        $activeCourse = "active";
        //$noOfWeeks = Week::get();
        $instructor_ids = Instructor::get();
        $school_ids = School::get();
        return view('admin.layouts.course.edit', compact('course', 'activeCourse', 'instructor_ids', 'school_ids'));
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
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return redirect('course')->with('success_status', 'Course Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::destroy($id);
        return redirect('course')->with("failure_status", "Course Moved to Trash");
    }
}
