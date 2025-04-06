<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/instructor', [DashboardController::class, 'instructor'])->name('instructor');
Route::get('/student', [DashboardController::class, 'student'])->name('student');


