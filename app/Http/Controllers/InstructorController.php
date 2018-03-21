<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
use Image;

class InstructorController extends Controller
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
        ->select('instructors.id', 'instructor', 'about_instructor', 'instructor_image', 'first_name', 'last_name')->get();

        return view('admin.layouts.instructor.view', compact('activeInstructor', 'getInstructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activeInstructor = "active";
        return view('admin.layouts.instructor.add', compact('activeInstructor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = $request->file('instructor_image');
        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $destinationPath = public_path('/images/instructors');
        $thumb_img = Image::make($photo->getRealPath())->resize(400, 400);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $instructor = $request->all();
        $instructor['instructor_image'] = $imagename;

        Instructor::create($instructor);

        return redirect()->back()->with("success_status", "Instructor Added");
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
