<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.master');
    }

    public function instructor()
    {
        return view('dashboard.instructor');
    }

    public function student()
    {
        return view('dashboard.student');
    }
}
