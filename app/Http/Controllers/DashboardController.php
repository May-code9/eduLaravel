<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $activeDashboard = "active";
        return view('admin.layouts.index', compact('activeDashboard'));
    }
}
