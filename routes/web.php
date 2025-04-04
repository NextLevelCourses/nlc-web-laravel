<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');