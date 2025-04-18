<?php

use App\Modules\Authentication\Handler\HandlerAuth;
use Illuminate\Support\Facades\Route;

Route::post('/login', [HandlerAuth::class, 'login'])->name('auth.login');
