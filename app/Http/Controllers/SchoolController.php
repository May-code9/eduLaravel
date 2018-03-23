<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\School;

class SchoolController extends Controller
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
      ->select('schools.id', 'name', 'locations', 'founded', 'founder', 'first_name', 'last_name')->get();

      return view('admin.layouts.school.view', compact('activeSchool', 'getSchools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $activeSchool = "active";
      return view('admin.layouts.school.add', compact('activeSchool'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        School::create($request->all());
        return redirect()->back()->with("success_status", "School Added");
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
      $school = School::findOrFail($id);

      $activeSchool = 'active';
      return view('admin.layouts.school.edit', compact('activeSchool', 'school'));
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
      $school = School::findOrFail($id);
      if($request->input('founded') != null) {
        //dd($request->all());
        $school->update($request->all());
      } else {
        $name = $request->input('name');
        $locations = $request->input('locations');
        $founder = $request->input('founder');
        $user_id = $request->input('user_id');

        $school->update(['name'=>$name, 'locations'=>$locations, 'founder'=>$founder, 'user_id'=>$user_id]);

      }

      return redirect('/school')->with("success_status", "School Edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      School::destroy($id);
      return redirect('/school')->with("failure_status", "School Moved to Trash");
    }
}
