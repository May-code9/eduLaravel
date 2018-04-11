<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Content;
use App\Course;
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
      $request->validate([
        'instructor_image' => 'required|mimes:jpeg,png|max:1000'
      ]);
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
    public function content($id)
    {
      $content = Content::findOrFail($id);

      $activeContent = 'active';
      return view('admin.layouts.content.editImage', compact('activeContent', 'content'));
    }
    public function post_content(Request $request, $id)
    {
      $request->validate([
        'content_image' => 'required|mimes:jpeg,png|max:1000'
      ]);
      $content = Content::findOrFail($id);
      $photo = $request->file('content_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/content');
      $thumb_img = Image::make($photo->getRealPath())->resize(1000, 500);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $user_id = $request->input('user_id');

      $content->update(['content_image'=>$imagename, 'user_id'=>$user_id]);
      return redirect('/content')->with("success_status", "Content Image Updated");
    }
    public function course($id)
    {
      $course = Course::findOrFail($id);

      $activeCourse = 'active';
      return view('admin.layouts.course.editImage', compact('activeCourse', 'course'));
    }
    public function post_course(Request $request, $id)
    {
      $request->validate([
        'course_image' => 'required|mimes:jpeg,png|max:1000'
      ]);
      $course = Course::findOrFail($id);
      $photo = $request->file('course_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/course');
      $thumb_img = Image::make($photo->getRealPath())->resize(370, 270);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $user_id = $request->input('user_id');

      $course->update(['course_image'=>$imagename, 'user_id'=>$user_id]);
      return redirect('/course')->with("success_status", "Course Image Updated");
    }
}
