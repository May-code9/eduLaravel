<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class EditPdfController extends Controller
{
    public function pdf($id)
    {
      $content = Content::findOrFail($id);

      $activeContent = 'active';
      return view('admin.layouts.content.editPdf', compact('activeContent', 'content'));
    }
    public function post_pdf(Request $request, $id)
    {
      $request->validate([
        'content_pdf' => 'required|mimes:pdf'
      ]);
      $pdf = $request->file('content_pdf');
      $uniqueFileName = uniqid() . $pdf->getClientOriginalName();
      $pdfPath = public_path('/pdf');
      $pdf->move($pdfPath, $uniqueFileName);

      $content = Content::findOrFail($id);

      $user_id = $request->input('user_id');

      $content->update(['content_pdf'=>$uniqueFileName, 'user_id'=>$user_id]);
      return redirect('/content')->with("success_status", "Content PDF Changed");
    }
}
