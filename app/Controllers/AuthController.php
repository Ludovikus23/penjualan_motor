<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
  
    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            
            $userModel = new UserModel();
            $user = $userModel->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                session()->set('user_id', $user['id']);
                return redirect()->to(base_url('dashboard')); // Redirect ke halaman dashboard setelah login
            } else {
                return redirect()->back()->with('error', 'Email atau Password salah');
            }
        }

        return view('auth/login'); // Tampilan login tanpa layout
    }
    
public function logout()
{
    session()->destroy();
    return redirect()->to(base_url('auth/login'));
}
public function save()
{
    if ($this->request->getMethod() == 'post') {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'first_name' => 'required|min_length[3]',
            'last_name' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'password_repeat' => 'matches[password]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, tampilkan kembali form dengan pesan error
            return view('auth/register', [
                'validation' => $this->validator
            ]);
        }

        // Debugging: Melihat data yang akan disimpan
        log_message('debug', 'Data yang dikirim: ' . print_r($this->request->getPost(), true));

        // Ambil data form
        $userModel = new UserModel();
        $userModel->save([
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ]);

        // Debugging: Mengecek apakah data berhasil disimpan
        if ($userModel->errors()) {
            log_message('error', 'Error dalam menyimpan data: ' . print_r($userModel->errors(), true));
        }

        // Redirect ke halaman login setelah pendaftaran sukses
        return redirect()->to(base_url('auth/login'))->with('message', 'Registration successful. Please login.');
    }

    return view('auth/register');
}
public function register()
{
    if ($this->request->getMethod() == 'post') {
        // Validasi form
        $validationRules = [
            'first_name' => 'required|min_length[3]',
            'last_name'  => 'required|min_length[3]',
            'email'      => 'required|valid_email|is_unique[users.email]',
            'password'   => 'required|min_length[6]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('error', 'Data tidak valid!');
        }

        // Ambil data dari form
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        // Panggil model untuk insert data
        $userModel = new \App\Models\UserModel();
        if ($userModel->save($data)) {
            return redirect()->to('/login'); // Redirect ke halaman login setelah berhasil registrasi
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data!');
        }
    }

    return view('auth/register');
}
public function index(): string
{
    return view('dashboard');
}

}
