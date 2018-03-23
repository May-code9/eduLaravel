<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolTrashed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activeSchool = "active";
      $getSchools = School::join('users', 'users.id', '=', 'schools.user_id')
      ->select('schools.id', 'name', 'locations', 'founded', 'founder', 'first_name', 'last_name')->onlyTrashed()->get();

      return view('admin.layouts.school.trash.view', compact('activeSchool', 'getSchools'));
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
      $school = School::onlyTrashed()->findOrFail($id);

      $activeSchool = 'active';
      return view('admin.layouts.school.trash.edit', compact('activeSchool', 'school'));
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
      $school = School::withTrashed()->findOrFail($id)->restore();
      return redirect('/trashedSchool')->with("success_status", "School Restored");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $school = School::withTrashed()->findOrFail($id);
      $school->forceDelete();
      return redirect('/trashedSchool')->with("failure_status", "School Deleted");
    }
}
