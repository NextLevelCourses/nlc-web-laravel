<?php

use App\Modules\Authentication\Handler\HandlerAuth;
use Illuminate\Support\Facades\Route;

Route::post('/login', [HandlerAuth::class, 'login'])->name('auth.login');
Route::post('/register', [HandlerAuth::class, 'register'])->name('auth.register');
Route::get('/verification/account/{token}', [HandlerAuth::class, 'verification'])->name('auth.verification');
