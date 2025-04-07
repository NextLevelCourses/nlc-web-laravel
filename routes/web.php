<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
// Route::get('/', [LandingController::class, 'index']);
Route::get('/', [LandingController::class, 'index'])->name('landing.home');
Route::get('/detail', [LandingController::class, 'detail'])->name('landing.detail');
Route::get('/aboutus', [LandingController::class, 'aboutus'])->name('landing.aboutus');
Route::get('/testimonial', [LandingController::class, 'testimonial'])->name('landing.testimonial');
Route::get('/register', [LandingController::class, 'register'])->name('landing.register');
Route::get('/faqs', [LandingController::class, 'faqs'])->name('landing.faqs');
Route::get('/blog', [LandingController::class, 'blog'])->name('landing.blog');
Route::get('/allcourse', [LandingController::class, 'allcourse'])->name('landing.allcourse');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/instructor', [DashboardController::class, 'instructor'])->name('instructor');
Route::get('/student', [DashboardController::class, 'student'])->name('student');



=======
// Landing Routes
Route::get('/', [LandingController::class, 'Index'])->name('Landing.Home');
Route::get('/Detail', [LandingController::class, 'Detail'])->name('Landing.Detail');
Route::get('/AboutUs', [LandingController::class, 'AboutUs'])->name('Landing.AboutUs');
Route::get('/Testimonial', [LandingController::class, 'Testimonial'])->name('Landing.Testimonial');
Route::get('/Register', [LandingController::class, 'Register'])->name('Landing.Register');
Route::get('/FAQs', [LandingController::class, 'FAQs'])->name('Landing.FAQs');

//Dashboard Routes
Route::get('/Dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/Instructor', [DashboardController::class, 'instructor'])->name('instructor');
Route::get('/Student', [DashboardController::class, 'student'])->name('student');
>>>>>>> a550de49702d3fdf26688562f9f3085983b08d5e
