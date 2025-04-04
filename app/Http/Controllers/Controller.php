<?php

namespace App\Http\Controllers;

abstract class Controller
{
     // Method untuk menangani halaman utama
     public function index()
     {
         // Mengembalikan view 'index' yang menggunakan layout 'app.blade.php'
         return view('index');
     }
}
