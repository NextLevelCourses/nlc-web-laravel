<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function Index()
    {
        return view('landing.module.Home');
    }

    public function AllCourse()
    {
        return view('landing.module.AllCourse');
    }

    public function DetailCourse()
    {
        return view('landing.module.DetailCourse');
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

    public function DetailBlog()
    {
        return view('landing.module.DetailBlog');
    }

    public function SpecialPrograms()
    {
        return view('landing.module.SpecialPrograms');
    }

    public function OurCommunity()
    {
        return view('landing.module.OurCommunity');
    }
}
