<?php

use App\Http\Controllers\CourseLayoutController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard.index');
Route::get('/CourseLayout', [CourseLayoutController::class, 'index'])->name('CourseLayout.index');