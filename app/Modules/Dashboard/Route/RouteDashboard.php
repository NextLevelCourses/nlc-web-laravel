<?php

namespace App\Modules\Dashboard\Route;

use App\Modules\Dashboard\Handler\HandlerDashboard;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'throttle:30,1'])->group(function () {
    Route::get('/Home', [HandlerDashboard::class, 'Home'])->name('Dashboard.Home');
    Route::get('/DetailCourseDashboard', [HandlerDashboard::class, 'DetailCourseDashboard'])->name('Dashboard.DetailCourseDashboard');
    Route::get('/MyProfile', [HandlerDashboard::class, 'MyProfile'])->name('Dashboard.MyProfile');
    Route::get('/Wishlist', [HandlerDashboard::class, 'Wishlist'])->name('Dashboard.Wishlist');
    Route::get('/OrderHistory', [HandlerDashboard::class, 'OrderHistory'])->name('Dashboard.OrderHistory');
    Route::get('/CreateCourse', [HandlerDashboard::class, 'CreateCourse'])->name('Dashboard.CreateCourse');
    Route::get('/Checkout', [HandlerDashboard::class, 'Checkout'])->name('Dashboard.Checkout');
    Route::get('/Learning', [HandlerDashboard::class, 'Learning'])->name('Dashboard.Learning');
    Route::get('/AboutUs', [HandlerDashboard::class, 'AboutUs'])->name('Dashboard.AboutUs');
    Route::get('/Cart', [HandlerDashboard::class, 'Cart'])->name('Dashboard.Cart');
    Route::get('/MyCommunity', [HandlerDashboard::class, 'MyCommunity'])->name('Dashboard.MyCommunity');
    Route::get('/Mentoring', [HandlerDashboard::class, 'Mentoring'])->name('Dashboard.Mentoring');
    Route::get('/EnrolledCourses', [HandlerDashboard::class, 'EnrolledCourses'])->name('Dashboard.EnrolledCourses');
});
