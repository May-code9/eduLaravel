<?php
use Illuminate\Http\Request;

function uploadPdf($pdf_file)
 {
   //$pdf = $pdf_file;
   $uniqueFileName = uniqid() . $pdf_file->getClientOriginalName() . '.' . $pdf_file->getClientOriginalExtension();

   return $uniqueFileName;
 }

 function uploadImage($image_file)
 {
   //$photo = $image_file;
   $imagename = time().'.'.$image_file->getClientOriginalExtension();

   return $imagename;
 }
