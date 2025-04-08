<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Home()
    {
        return view('dashboard.module.Home');
    }

    public function DetailCourse()
    {
        return view('dashboard.module.DetailCourse');
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
    public function OurCommunity()
    {
        return view('dashboard.module.OurCommunity');
    }

    public function Learning()
    {
        return view('dashboard.module.Learning');
    }
}
