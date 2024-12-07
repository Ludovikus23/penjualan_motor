<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PublicController extends Controller
{
    public function index()
    {
        // Menampilkan halaman utama (home)
        return view('public/home');
    }

    public function about()
    {
        // Menampilkan halaman about
        return view('public/about');
    }

    public function contact()
    {
        // Menampilkan halaman kontak
        return view('public/contact');
    }
}
