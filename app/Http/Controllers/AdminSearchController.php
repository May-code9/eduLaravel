<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Week;
use App\Course;
use App\Content;
use App\Category;

class AdminSearchController extends Controller
{
    public function contentSearch(Request $request)
    {
      $contentNumber = $request->input('content_number');
      $contentWeek = $request->input('content_week');
      $course = $request->input('course');

      if(is_null($contentNumber)) {
        $getContents = Content::join('users', 'users.id', '=', 'contents.user_id')
        ->join('courses', 'courses.id', '=', 'contents.course_id')
        ->join('categories', 'categories.id', '=', 'contents.category_id')
        ->where('course_id', $course)
        ->where('week_no', $contentWeek)
        ->select('contents.id', 'course', 'category', 'content_title', 'content_text', 'content_pdf', 'content_video', 'content_image', 'week_no', 'first_name', 'last_name')
        ->orderBy('contents.id')
        ->get();
      } else {
        $getContents = Content::join('users', 'users.id', '=', 'contents.user_id')
        ->join('courses', 'courses.id', '=', 'contents.course_id')
        ->join('categories', 'categories.id', '=', 'contents.category_id')
        ->where('course_id', $course)
        ->where('content_number', $contentNumber)
        ->where('week_no', $contentWeek)
        ->select('contents.id', 'course', 'category', 'content_title', 'content_text', 'content_pdf', 'content_video', 'content_image', 'week_no', 'first_name', 'last_name')
        ->orderBy('contents.id')
        ->get();
      }

      $courseIds = Course::get();
      $activeContent = 'active';
      return view('admin.layouts.content.view', compact('getContents', 'courseIds', 'activeContent'));
  }
}
