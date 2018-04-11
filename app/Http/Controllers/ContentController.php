<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Course;
use App\Content;
use App\Category;

class ContentController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $activeContent = "active";

    $getContents = Content::join('users', 'users.id', '=', 'contents.user_id')
    ->join('courses', 'courses.id', '=', 'contents.course_id')
    ->join('categories', 'categories.id', '=', 'contents.category_id')
    ->select('contents.id', 'course', 'category', 'content_title', 'content_text', 'content_pdf', 'content_video', 'content_image', 'week_no', 'first_name', 'last_name')
    ->orderBy('contents.id')
    ->get();
    $courseIds = Course::get();

    $activeContent = 'active';
    return view('admin.layouts.content.view', compact('getContents', 'courseIds', 'activeContent'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $courseIds = Course::get();
    $categories = Category::get();
    $activeContent = "active";
    return view("admin.layouts.content.add", compact("activeContent", "courseIds", "categories"));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $request->validate([
      'content_pdf' => 'required|mimes:pdf',
      'content_image' => 'nullable|mimes:jpeg,png|max:1000',
      'content_video' => 'nullable|mimes:mpeg,mp4,avi'
    ]);
    $pdf = $request->file('content_pdf');
    $uniqueFileName = uniqid() . $pdf->getClientOriginalName();
    $pdfPath = public_path('/pdf');
    $pdf->move($pdfPath, $uniqueFileName);

    if ($request->hasFile('content_video') && $request->hasFile('content_image')) {
      return redirect()->back()->with("failure_status", "Can't add both Image and Video, select either of the two");
    }elseif ($request->hasFile('content_image')) {
      $photo = $request->file('content_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/content');
      $thumb_img = Image::make($photo->getRealPath())->resize(1000, 500);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $content = $request->all();
      $content['content_image'] = $imagename;

    }elseif ($request->hasFile('content_video')) {
      $video = $request->file('content_video');
      $videoFileName = uniqid() . $video->getClientOriginalName();
      $videoPath = public_path('/video');
      $video->move($videoPath, $videoFileName);

      $content = $request->all();
      $content['content_video'] = $videoFileName;
    } else {
      $content = $request->all();
    }
    $content['content_pdf'] = $uniqueFileName;

    Content::create($content);
    return redirect()->back()->with("success_status", "Content Added");
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
    $activeContent = "active";
    $getContents = Content::join('users', 'users.id', '=', 'contents.user_id')
    ->join('courses', 'courses.id', '=', 'contents.course_id')
    ->join('categories', 'categories.id', '=', 'contents.category_id')
    ->select('contents.id', 'course', 'course_id', 'category', 'content_title', 'content_number', 'content_text', 'content_pdf', 'content_video', 'content_image', 'week_no', 'first_name', 'last_name')
    ->findOrFail($id);

    $courseIds = Course::get();
    $categories = Category::get();

    $activeContent = 'active';
    return view('admin.layouts.content.edit', compact('getContents', 'activeContent', 'courseIds', 'categories'));
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
    $content = Content::findOrFail($id);

    $courseId = $request->input('course_id');
    $contentTitle = $request->input('content_title');
    $week = $request->input('week_no');
    $contentText = $request->input('content_text');
    $user_id = $request->input('user_id');

    $content->update(['course_id'=>$courseId, 'content_title'=>$contentTitle, 'week_no'=>$week, 'content_text'=>$contentText, 'user_id'=>$user_id]);

    return redirect('/content')->with("success_status", "Content Updated ");
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    Content::destroy($id);
    return redirect('/content')->with("failure_status", "Content Moved to Trash");
  }
}
