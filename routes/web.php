<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [LandingController::class, 'index']);
Route::get('/', [LandingController::class, 'index'])->name('landing.home');
Route::get('/detail', [LandingController::class, 'detail'])->name('landing.detail');
Route::get('/aboutus', [LandingController::class, 'aboutus'])->name('landing.aboutus');
Route::get('/testimonial', [LandingController::class, 'testimonial'])->name('landing.testimonial');
Route::get('/register', [LandingController::class, 'register'])->name('landing.register');
Route::get('/faqs', [LandingController::class, 'faqs'])->name('landing.faqs');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/instructor', [DashboardController::class, 'instructor'])->name('instructor');
Route::get('/student', [DashboardController::class, 'student'])->name('student');


