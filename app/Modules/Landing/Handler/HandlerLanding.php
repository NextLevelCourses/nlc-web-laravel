<?php

namespace App\Modules\Landing\Handler;

class HandlerLanding
{
    public function Index()
    {
        return view('landing.module.Home');
    }

    public function AllCourse()
    {
        return view('landing.module.AllCourse');
    }

    public function DetailCourseLanding()
    {
        return view('landing.module.DetailCourseLanding');
    }

    public function About()
    {
        return view('landing.module.AboutUs');
    }

    public function Testimonial()
    {
        return view('landing.module.Testimonial');
    }

    public function Authentication()
    {
        return view('landing.module.Authentication');
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

    public function ResetPassword()
    {
        return view('landing.module.ResetPassword');
    }
}
