<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller
{
    public function login()
    {
        $session = session();
        $model = new UserModel();

        // Cek apakah form login sudah dikirimkan
        if ($this->request->getMethod() === 'post') {
            // Validasi input
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Cek kredensial pengguna
            $user = $model->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Set session jika login berhasil
                $session->set('isLoggedIn', true);
                $session->set('user_id', $user['id']);
                
                // Redireksi ke halaman dashboard
                return redirect()->to('auth/main');
            } else {
                // Tampilkan pesan error jika login gagal
                $session->setFlashdata('error', 'Username atau password salah!');
            }
        }

        return view('login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Menghancurkan session untuk logout

        return redirect()->to('/login'); // Mengarahkan ke halaman login setelah logout
    }
}
