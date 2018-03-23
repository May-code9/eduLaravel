<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Instructor;

class EditImagesController extends Controller
{
    public function instructor($id)
    {
      $instructor = Instructor::findOrFail($id);

      $activeInstructor = 'active';
      return view('admin.layouts.instructor.editImage', compact('activeInstructor', 'instructor'));
    }

    public function post_instructor(Request $request, $id)
    {
      $instructor = Instructor::findOrFail($id);
      $photo = $request->file('instructor_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/instructors');
      $thumb_img = Image::make($photo->getRealPath())->resize(400, 400);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $user_id = $request->input('user_id');

      $instructor->update(['instructor_image'=>$imagename, 'user_id'=>$user_id]);
      return redirect('/instructor')->with("success_status", "Instructor Image Updated");
    }
}
