<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorTrashed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activeInstructor = "active";
      $getInstructors = Instructor::join('users', 'users.id', '=', 'instructors.user_id')
      ->select('instructors.id', 'instructor', 'about_instructor', 'instructor_image', 'first_name', 'last_name')->onlyTrashed()->get();

      return view('admin.layouts.instructor.trash.view', compact('activeInstructor', 'getInstructors'));
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
      $instructor = Instructor::onlyTrashed()->findOrFail($id);

      $activeInstructor = 'active';
      return view('admin.layouts.instructor.trash.edit', compact('activeInstructor', 'instructor'));
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
        $instructor = Instructor::withTrashed()->findOrFail($id)->restore();
        //dd($request->deleted_at);
        //$instructor->update(['deleted_at'=>0]);
        return redirect('/trashedInstructor')->with("success_status", "Instructor Restored");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor = Instructor::withTrashed()->findOrFail($id);
        $instructor->forceDelete();
        return redirect('/trashedInstructor')->with("failure_status", "Instructor Deleted");
    }
}
