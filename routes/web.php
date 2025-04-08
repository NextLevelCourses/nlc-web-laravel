<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Landing Routes
Route::get('/', [LandingController::class, 'Index'])->name('Landing.Home');
Route::get('/AboutUs', [LandingController::class, 'AboutUs'])->name('Landing.AboutUs');
Route::get('/Testimonial', [LandingController::class, 'Testimonial'])->name('Landing.Testimonial');
Route::get('/Register', [LandingController::class, 'Register'])->name('Landing.Register');
Route::get('/FAQs', [LandingController::class, 'FAQs'])->name('Landing.FAQs');
Route::get('/DetailBlog', [LandingController::class, 'DetailBlog'])->name('Landing.DetailBlog');
Route::get('/DetailCourse', [LandingController::class, 'DetailCourse'])->name('Landing.DetailCourse');
Route::get('/AllCourse', [LandingController::class, 'AllCourse'])->name('Landing.AllCourse');

//Dashboard Routes
Route::get('/Home', [DashboardController::class, 'Home'])->name('Dashboard.Home');
Route::get('/DashboardDetailCourse', [DashboardController::class, 'DetailCourse'])->name('Dashboard.DetailCourse');
Route::get('/MyProfile', [DashboardController::class, 'MyProfile'])->name('Dashboard.MyProfile');
Route::get('/Wishlist', [DashboardController::class, 'Wishlist'])->name('Dashboard.Wishlist');
Route::get('/OrderHistory', [DashboardController::class, 'OrderHistory'])->name('Dashboard.OrderHistory');
Route::get('/CreateCourse', [DashboardController::class, 'CreateCourse'])->name('Dashboard.CreateCourse');
Route::get('/Checkout', [DashboardController::class, 'Checkout'])->name('Dashboard.Checkout');
Route::get('/OurCommunity', [DashboardController::class, 'OurCommunity'])->name('Dashboard.OurCommunity');
Route::get('/Learning', [DashboardController::class, 'Learning'])->name('Dashboard.Learning');

