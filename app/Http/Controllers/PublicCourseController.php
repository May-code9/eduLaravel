<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Course;
use App\Content;
use App\UserCourse;

class PublicCourseController extends Controller
{
  public function classroom() {
    $courses = Course::join('schools', 'schools.id', '=', 'courses.school_id')
    //->join('contents', 'contents.id', '=', 'contents.course_id')
    ->select('courses.id', 'course', 'about_course', 'course_image', 'name')
    ->orderBy('courses.id')
    ->get();

    $coursesActive = "active";
    return view('public.courses', compact('coursesActive', 'courses'));
  }
  public function icourse($id) {
    $courses = Course::join('schools', 'schools.id', '=', 'courses.school_id')
    ->join('instructors', 'instructors.id', '=', 'courses.instructor_id')
    ->select('courses.id', 'course', 'about_course', 'course_image', 'name', 'about_instructor', 'instructor_image', 'instructor')
    ->findOrFail($id);

    $checkIfUserCourseExit = UserCourse::where('user_id', Auth::user()->id)->where('course_id', $id)->count();

    $courseWeeks = courseWeek($id);

    $value1s = getICourse($id, $courseWeeks[0], 1);
    $value2s = getICourse($id, $courseWeeks[1], 2);
    $value3s = getICourse($id, $courseWeeks[2], 3);
    $value4s = getICourse($id, $courseWeeks[3], 4);
    $value5s = getICourse($id, $courseWeeks[4], 5);
    $value6s = getICourse($id, $courseWeeks[5], 6);

    $coursesActive = "active";
    return view('public.icourse', compact('coursesActive', 'courses', 'courseWeeks',
     'checkIfUserCourseExit', 'value1s', 'value2s', 'value3s', 'value4s', 'value5s', 'value6s'));
  }

  public function take_course($id)
  {
    $submitToUserCourse = new UserCourse;

    $submitToUserCourse->user_id = Auth::user()->id;
    $submitToUserCourse->course_id = $id;

    $submitToUserCourse->save();
    return redirect()->back();
  }

  public function courseContent($id, $weekNo, $contentId)
  {
    $courses = Course::findOrFail($id);

    $checkIfUserCourseExit = UserCourse::where('user_id', Auth::user()->id)->where('course_id', $id)->count();
    if($checkIfUserCourseExit == 0) {
      return redirect()->back();
    } else {
      $courseWeeks = courseWeek($id);

      $value1s = getICourse($id, $courseWeeks[0], 1);
      $value2s = getICourse($id, $courseWeeks[1], 2);
      $value3s = getICourse($id, $courseWeeks[2], 3);
      $value4s = getICourse($id, $courseWeeks[3], 4);
      $value5s = getICourse($id, $courseWeeks[4], 5);
      $value6s = getICourse($id, $courseWeeks[5], 6);

      //for course details
      $category = Content::where('course_id', $id)->where('week_no', $weekNo)->where('content_number', $contentId)->pluck('category_id')->last();
      //video
      $displayVideo = selectCategory($id, $weekNo, $contentId, 1);

      //Text
      $displayText = selectCategory($id, $weekNo, $contentId, 2);

      //Image
      $displayImage = selectCategory($id, $weekNo, $contentId, 3);

      $contentText = Content::where('course_id', $id)->where('week_no', $weekNo)->where('content_number', $contentId)->pluck('content_text')->last();

      $coursesActive = "active";
      return view('public.icourseContent', compact('coursesActive', 'courses', 'courseWeeks', 'value1s', 'value2s', 'value3s', 'value4s', 'value5s',
       'value6s', 'displayVideo', 'displayText', 'displayImage', 'category', 'contentText'));
    }
  }
}
