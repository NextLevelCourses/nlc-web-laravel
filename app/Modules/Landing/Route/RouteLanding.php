<?php

use App\Modules\Landing\Handler\HandlerLanding;
use Illuminate\Support\Facades\Route;

Route::get('/', [HandlerLanding::class, 'Index'])->name('landing.Home');
Route::get('/About', [HandlerLanding::class, 'About'])->name('landing.About');
Route::get('/Testimonial', [HandlerLanding::class, 'Testimonial'])->name('landing.Testimonial');
Route::get('/Register', [HandlerLanding::class, 'Register'])->name('landing.Register');
Route::get('/FAQs', [HandlerLanding::class, 'FAQs'])->name('landing.FAQs');
Route::get('/DetailBlog', [HandlerLanding::class, 'DetailBlog'])->name('landing.DetailBlog');
Route::get('/DetailCourseLanding', [HandlerLanding::class, 'DetailCourseLanding'])->name('landing.DetailCourseLanding');
Route::get('/AllCourse', [HandlerLanding::class, 'AllCourse'])->name('landing.AllCourse');
Route::get('/SpecialPrograms', [HandlerLanding::class, 'SpecialPrograms'])->name('landing.SpecialPrograms');
Route::get('/OurCommunity', [HandlerLanding::class, 'OurCommunity'])->name('landing.OurCommunity');
