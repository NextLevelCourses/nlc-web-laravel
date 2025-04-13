<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Home()
    {
        return view('dashboard.module.Home');
    }

    public function DetailCourseDashboard()
    {
        return view('dashboard.module.DetailCourseDashboard');
    }

    public function MyProfile()
    {
        return view('dashboard.module.MyProfile');
    }

    public function Wishlist()
    {
        return view('dashboard.module.Wishlist');
    }
    public function OrderHistory()
    {
        return view('dashboard.module.OrderHistory');
    }

    public function CreateCourse()
    {
        return view('dashboard.module.CreateCourse');
    }

    public function Checkout()
    {
        return view('dashboard.module.Checkout');
    }

    public function Learning()
    {
        return view('dashboard.module.Learning');
    }

    public function AboutUs()
    {
        return view('dashboard.module.AboutUs');
    }

    public function Cart()
    {
        return view('dashboard.module.Cart');
    }

    public function MyCommunity()
    {
        return view('dashboard.module.MyCommunity');
    }

    public function Mentoring()
    {
        return view('dashboard.module.Mentoring');
    }

    
    

}
