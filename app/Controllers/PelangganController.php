<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class PelangganController extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();
        $data['pelanggan'] = $pelangganModel->findAll(); // Mengambil semua data pelanggan
        return view('pelanggan/index', $data); // Menampilkan halaman index
    }

    public function create()
    {
        return view('pelanggan/create'); // Menampilkan halaman form create
    }

    public function store()
    {
        $pelangganModel = new PelangganModel();

        // Ambil data dari form
        $data = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'alamat_pelanggan' => $this->request->getPost('alamat_pelanggan'),
            'telepon_pelanggan' => $this->request->getPost('telepon_pelanggan'),
            'email_pelanggan' => $this->request->getPost('email_pelanggan'),
            'tanggal_daftar' => $this->request->getPost('tanggal_daftar')
        ];

        $pelangganModel->save($data); // Simpan data ke tabel
        return redirect()->to('/pelanggan'); // Redirect ke halaman index
    }

    public function edit($id)
    {
        $pelangganModel = new PelangganModel();
        $data['pelanggan'] = $pelangganModel->find($id); // Ambil data berdasarkan ID
        return view('pelanggan/edit', $data); // Tampilkan halaman edit
    }

    public function update($id)
    {
        $pelangganModel = new PelangganModel();

        $data = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'alamat_pelanggan' => $this->request->getPost('alamat_pelanggan'),
            'telepon_pelanggan' => $this->request->getPost('telepon_pelanggan'),
            'email_pelanggan' => $this->request->getPost('email_pelanggan'),
            'tanggal_daftar' => $this->request->getPost('tanggal_daftar')
        ];

        $pelangganModel->update($id, $data); // Update data
        return redirect()->to('/pelanggan'); // Redirect kembali ke halaman index
    }

    public function delete($id)
    {
        $pelangganModel = new PelangganModel();
        $pelangganModel->delete($id); // Hapus data berdasarkan ID
        return redirect()->to('/pelanggan'); // Redirect kembali ke halaman index
    }
}
