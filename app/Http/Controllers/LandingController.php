<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }

    public function detail()
    {
        return view('landing.detail');
    }

    public function aboutus()
    {
        return view('landing.aboutus');
    }

    public function testimonial()
    {
        return view('landing.testimonial');
    }

    public function register()
    {
        return view('landing.register');
    }

    public function faqs()
    {
        return view('landing.faqs');
    }
}
