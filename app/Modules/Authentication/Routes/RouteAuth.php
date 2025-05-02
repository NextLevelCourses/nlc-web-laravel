<?php

use App\Modules\Authentication\Handler\HandlerAuth;
use Illuminate\Support\Facades\Route;

Route::middleware('throttle:30,1')->group(function () {
    Route::post('/login', [HandlerAuth::class, 'login'])->name('auth.login');
    Route::post('/register', [HandlerAuth::class, 'register'])->name('auth.register');
    Route::get('/verification/account/{token}', [HandlerAuth::class, 'verification'])->name('auth.verification');
    Route::post('/logout', [HandlerAuth::class, 'logout'])->name('auth.logout');
    Route::post('/forgot/password', [HandlerAuth::class, 'forgotPassword'])->name('auth.forgot.password');
    Route::get('/reset/{token}/password', [HandlerAuth::class, 'resetPassword'])->name('auth.reset.password');
    Route::post('/change/password', [HandlerAuth::class, 'changePassword'])->name('auth.change.password');
});
