<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Landing Routes
Route::get('/', [LandingController::class, 'Index'])->name('Landing.Home');
Route::get('/Detail', [LandingController::class, 'Detail'])->name('Landing.Detail');
Route::get('/AboutUs', [LandingController::class, 'AboutUs'])->name('Landing.AboutUs');
Route::get('/Testimonial', [LandingController::class, 'Testimonial'])->name('Landing.Testimonial');
Route::get('/Register', [LandingController::class, 'Register'])->name('Landing.Register');
Route::get('/FAQs', [LandingController::class, 'FAQs'])->name('Landing.FAQs');
Route::get('/Blog', [LandingController::class, 'blog'])->name('Landing.Blog');
Route::get('/AllCourse', [LandingController::class, 'allcourse'])->name('Landing.AllCourse');

//Dashboard Routes
Route::get('/Dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/Instructor', [DashboardController::class, 'instructor'])->name('instructor');
Route::get('/Student', [DashboardController::class, 'student'])->name('student');
