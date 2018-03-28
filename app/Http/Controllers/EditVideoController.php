<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class EditVideoController extends Controller
{
    public function video($id)
    {
      $content = Content::findOrFail($id);
      $activeContent = 'active';
      return view('admin.layouts.content.editVideo', compact('activeContent', 'content'));
    }
    public function post_video(Request $request, $id)
    {
      $request->validate([
        'content_video' => 'required|mimes:mpeg,mp4,avi'
      ]);
      $content = Content::findOrFail($id);
      $video = $request->file('content_video');
      $videoFileName = uniqid() . $video->getClientOriginalName();
      $videoPath = public_path('/video');
      $video->move($videoPath, $videoFileName);

      $user_id = $request->input('user_id');

      $content->update(['content_video'=>$videoFileName, 'user_id'=>$user_id]);
      return redirect('/content')->with("success_status", "Content Video Updated");
    }
}
