<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseLayoutController extends Controller
{
    public function index()
    {
        return view('CourseLayout.index');
    }
}
