<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // pastikan file dashboard.php ada di app/Views
    }
}
