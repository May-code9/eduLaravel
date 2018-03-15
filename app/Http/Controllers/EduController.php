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
    public function iSchool() {

      return view('public.iSchool');
    }
    public function school() {
      $schoolActive = "active";
      return view('public.school', compact('schoolActive'));
    }
    public function contact() {
      $contactActive = "active";
      return view('public.contacts', compact('contactActive'));
    }
    public function coming() {
      return view('public.coming-soon');
    }
}
