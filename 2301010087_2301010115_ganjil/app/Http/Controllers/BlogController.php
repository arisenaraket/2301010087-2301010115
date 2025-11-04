<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Halaman Beranda
    public function beranda() {
        return view('soal_1_halaman_beranda');
    }

    // Halaman About
    public function about() {
        return view('about');
    }
}
