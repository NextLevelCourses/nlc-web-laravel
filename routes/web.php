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

