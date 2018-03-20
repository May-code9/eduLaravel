<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EduController extends Controller
{
    public function index() {
      $homeActive = "active";
      return view('public.index', compact('homeActive'));
    }
    public function about() {
      $aboutActive = "active";
      return view('public.about', compact('aboutActive'));
    }
    public function icourse() {
      $coursesActive = "active";
      return view('public.icourse', compact('coursesActive'));
    }
    public function courses() {
      $coursesActive = "active";
      return view('public.courses', compact('coursesActive'));
    }
    public function contact() {
      $contactActive = "active";
      return view('public.contacts', compact('contactActive'));
    }
    public function coming() {
      return view('public.coming-soon');
    }
}
