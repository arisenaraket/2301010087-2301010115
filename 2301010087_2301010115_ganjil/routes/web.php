<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Halaman Beranda
Route::get('/', [BlogController::class, 'beranda'])->name('beranda');

// Halaman About
Route::get('/about', [BlogController::class, 'about'])->name('about');
