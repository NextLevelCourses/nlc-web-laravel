<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function Index()
    {
        return view('landing.module.Home');
    }

<<<<<<< HEAD
    public function allcourse()
    {
        return view('landing.allcourse');
    }

    public function detail()
=======
    public function Detail()
>>>>>>> a550de49702d3fdf26688562f9f3085983b08d5e
    {
        return view('landing.module.Detail');
    }

    public function AboutUs()
    {
        return view('landing.module.AboutUs');
    }

    public function Testimonial()
    {
        return view('landing.module.Testimonial');
    }

    public function Register()
    {
        return view('landing.module.Register');
    }

    public function FAQs()
    {
        return view('landing.module.FAQs');
    }

    public function blog()
    {
        return view('landing.blog');
    }
}
