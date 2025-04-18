<?php

namespace App\Modules\Landing\Route;

use Illuminate\Support\Facades\Route;
use App\Modules\Landing\Handler\HandlerLanding;

Route::get('/', [HandlerLanding::class, 'Index'])->name('landing.Home');
Route::get('/About', [HandlerLanding::class, 'About'])->name('landing.About');
Route::get('/Testimonial', [HandlerLanding::class, 'Testimonial'])->name('landing.Testimonial');
Route::get('/Authentication', [HandlerLanding::class, 'Authentication'])->name('landing.Authentication');
Route::get('/FAQs', [HandlerLanding::class, 'FAQs'])->name('landing.FAQs');
Route::get('/DetailBlog', [HandlerLanding::class, 'DetailBlog'])->name('landing.DetailBlog');
Route::get('/DetailCourseLanding', [HandlerLanding::class, 'DetailCourseLanding'])->name('landing.DetailCourseLanding');
Route::get('/AllCourse', [HandlerLanding::class, 'AllCourse'])->name('landing.AllCourse');
Route::get('/SpecialPrograms', [HandlerLanding::class, 'SpecialPrograms'])->name('landing.SpecialPrograms');
Route::get('/OurCommunity', [HandlerLanding::class, 'OurCommunity'])->name('landing.OurCommunity');
