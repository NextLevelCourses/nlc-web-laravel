<?php

namespace App\Modules\Dashboard\Handler;

use Illuminate\Support\Facades\Auth;

class HandlerDashboard
{
    public function Home()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.Home');
        }
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function DetailCourseDashboard()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.DetailCourseDashboard');
        }
        return view('dashboard.module.DetailCourseDashboard');
    }

    public function MyProfile()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.MyProfile');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function Wishlist()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.Wishlist');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }
    public function OrderHistory()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.OrderHistory');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function CreateCourse()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.CreateCourse');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function Checkout()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.Checkout');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function Learning()
    {

        if (Auth::guard('user')->check()) {
            return view('dashboard.module.Learning');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function AboutUs()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.AboutUs');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function Cart()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.Cart');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function MyCommunity()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.MyCommunity');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function Mentoring()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.Mentoring');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function EnrolledCourses()
    {
        if (Auth::guard('user')->check()) {
            return view('dashboard.module.EnrolledCourses');
        }
        // Redirect to the login page if the user is not authenticated
        return redirect()->intended('/Authentication')->with('error', 'Silahkan login terlebih dahulu');
    }

    public function MyCourses()
    {
        return view('dashboard.module.MyCourses');
    }
}
