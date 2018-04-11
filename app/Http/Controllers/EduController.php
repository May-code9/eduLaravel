<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Week;
use App\Course;
use App\Content;

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
    public function contact() {
      $contactActive = "active";
      return view('public.contacts', compact('contactActive'));
    }
    public function coming() {
      return view('public.coming-soon');
    }
    public function bookshop()
    {
      $bookshopActive = "active";
      return view('public.bookshop', compact('bookshopActive'));
    }
}
