<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Content;

class PublicCourseController extends Controller
{
  public function courses() {
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
    ->findOrFail($id);

    $week1 = Content::where('course_id', $id)->where('week_no', 1)->count();
    $week2 = Content::where('course_id', $id)->where('week_no', 2)->count();
    $week3 = Content::where('course_id', $id)->where('week_no', 3)->count();
    $week4 = Content::where('course_id', $id)->where('week_no', 4)->count();
    $week5 = Content::where('course_id', $id)->where('week_no', 5)->count();
    $week6 = Content::where('course_id', $id)->where('week_no', 6)->count();

    if ($week1 > 0) {
      $one = 1;
      $weekContent1s = Content::where('course_id', $id)->where('week_no', 1)->get();
    }
    if ($week2 > 0) {
      $two = 2;
      $weekContent2s = Content::where('course_id', $id)->where('week_no', 2)->get();
    }
    if ($week3 > 0) {
      $three = 3;
      $weekContent3s = Content::where('course_id', $id)->where('week_no', 3)->get();
    }
    if ($week4 > 0) {
      $four = 4;
      $weekContent4s = Content::where('course_id', $id)->where('week_no', 4)->get();
    }
    if ($week5 > 0) {
      $five = 5;
      $weekContent5s = Content::where('course_id', $id)->where('week_no', 5)->get();
    }
    if ($week6 > 0) {
      $six = 6;
      $weekContent6s = Content::where('course_id', $id)->where('week_no', 6)->get();
    }
    $coursesActive = "active";
    return view('public.icourse', compact('coursesActive', 'courses', 'week1', 'week2', 'week3', 'week4', 'week5', 'week6',
     'weekContent1s', 'weekContent2s', 'weekContent3s', 'weekContent4s', 'weekContent5s', 'weekContent6s', 'one', 'two', 'three', 'four', 'five', 'six'));
  }
  public function courseContent($id, $weekNo, $contentId)
  {
    $courses = Course::findOrFail($id);

    $week1 = Content::where('course_id', $id)->where('week_no', 1)->count();
    $week2 = Content::where('course_id', $id)->where('week_no', 2)->count();
    $week3 = Content::where('course_id', $id)->where('week_no', 3)->count();
    $week4 = Content::where('course_id', $id)->where('week_no', 4)->count();
    $week5 = Content::where('course_id', $id)->where('week_no', 5)->count();
    $week6 = Content::where('course_id', $id)->where('week_no', 6)->count();

    if ($week1 > 0) {
      $one = 1;
      $weekContent1s = Content::where('course_id', $id)->where('week_no', 1)->get();
    }
    if ($week2 > 0) {
      $two = 2;
      $weekContent2s = Content::where('course_id', $id)->where('week_no', 2)->get();
    }
    if ($week3 > 0) {
      $three = 3;
      $weekContent3s = Content::where('course_id', $id)->where('week_no', 3)->get();
    }
    if ($week4 > 0) {
      $four = 4;
      $weekContent4s = Content::where('course_id', $id)->where('week_no', 4)->get();
    }
    if ($week5 > 0) {
      $five = 5;
      $weekContent5s = Content::where('course_id', $id)->where('week_no', 5)->get();
    }
    if ($week6 > 0) {
      $six = 6;
      $weekContent6s = Content::where('course_id', $id)->where('week_no', 6)->get();
    }

    //for course details
    $category = Content::where('course_id', $id)->where('week_no', $weekNo)->where('content_number', $contentId)->pluck('category_id')->last();
      //video
      $displayVideo = Content::where('course_id', $id)->where('week_no', $weekNo)->where('content_number', $contentId)->where('category_id', 1)->get()->last();

      //Text
      $displayText = Content::where('course_id', $id)->where('week_no', $weekNo)->where('content_number', $contentId)->where('category_id', 2)->get()->last();

      //Image
      $displayImage = Content::where('course_id', $id)->where('week_no', $weekNo)->where('content_number', $contentId)->where('category_id', 3)->get()->last();

      $contentText = Content::where('course_id', $id)->where('week_no', $weekNo)->where('content_number', $contentId)->pluck('content_text')->last();

    $coursesActive = "active";
    return view('public.icourseContent', compact('coursesActive', 'courses', 'week1', 'week2', 'week3', 'week4', 'week5', 'week6',
     'weekContent1s', 'weekContent2s', 'weekContent3s', 'weekContent4s', 'weekContent5s', 'weekContent6s',
     'one', 'two', 'three', 'four', 'five', 'six', 'displayVideo', 'displayText', 'displayImage', 'category', 'contentText'));
  }
}
