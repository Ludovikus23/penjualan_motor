<?php
// Di dalam app/Controllers/PromoController.php
namespace App\Controllers;

use App\Models\PromoModel;
use CodeIgniter\Controller;

class PromoController extends Controller
{
    
    public function index()
    {
        $session = session();
        
        // Cek apakah pengguna sudah login
        if (!$session->get('isLoggedIn')) {
            // Arahkan ke halaman login jika belum login
            return redirect()->to('auth/login');
        }

        // Ambil data promo dari model
        $promoModel = new PromoModel();
        $promos = $promoModel->findAll(); // Ambil semua promo dari database

        // Kirim data promo ke view
        return view('promo', ['promos' => $promos]);
    }
}