<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Landing Routes
Route::get('/', [LandingController::class, 'Index'])->name('landing.Home');
Route::get('/About', [LandingController::class, 'About'])->name('landing.About');
Route::get('/Testimonial', [LandingController::class, 'Testimonial'])->name('landing.Testimonial');
Route::get('/Register', [LandingController::class, 'Register'])->name('landing.Register');
Route::get('/FAQs', [LandingController::class, 'FAQs'])->name('landing.FAQs');
Route::get('/DetailBlog', [LandingController::class, 'DetailBlog'])->name('landing.DetailBlog');
Route::get('/DetailCourseLanding', [LandingController::class, 'DetailCourseLanding'])->name('landing.DetailCourseLanding');
Route::get('/AllCourse', [LandingController::class, 'AllCourse'])->name('landing.AllCourse');
Route::get('/SpecialPrograms', [LandingController::class, 'SpecialPrograms'])->name('landing.SpecialPrograms');
Route::get('/OurCommunity', [LandingController::class, 'OurCommunity'])->name('landing.OurCommunity');

//Dashboard Routes
Route::get('/Home', [DashboardController::class, 'Home'])->name('Dashboard.Home');
Route::get('/DetailCourseDashboard', [DashboardController::class, 'DetailCourseDashboard'])->name('Dashboard.DetailCourseDashboard');
Route::get('/MyProfile', [DashboardController::class, 'MyProfile'])->name('Dashboard.MyProfile');
Route::get('/Wishlist', [DashboardController::class, 'Wishlist'])->name('Dashboard.Wishlist');
Route::get('/OrderHistory', [DashboardController::class, 'OrderHistory'])->name('Dashboard.OrderHistory');
Route::get('/CreateCourse', [DashboardController::class, 'CreateCourse'])->name('Dashboard.CreateCourse');
Route::get('/Checkout', [DashboardController::class, 'Checkout'])->name('Dashboard.Checkout');
Route::get('/Learning', [DashboardController::class, 'Learning'])->name('Dashboard.Learning');
Route::get('/AboutUs', [DashboardController::class, 'AboutUs'])->name('Dashboard.AboutUs');
Route::get('/Cart', [DashboardController::class, 'Cart'])->name('Dashboard.Cart');
Route::get('/MyCommunity', [DashboardController::class, 'MyCommunity'])->name('Dashboard.MyCommunity');

