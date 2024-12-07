<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class LaporanController extends BaseController
{
    protected $laporanModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
    }

    // Menampilkan semua laporan
    public function index()
    {
        $data['laporan'] = $this->laporanModel->findAll();
        return view('laporan/index', $data);
    }

    // Form untuk membuat laporan baru
    public function create()
    {
        return view('laporan/create');
    }

    // Menyimpan laporan baru
    public function store()
    {
        $data = $this->request->getPost();

        if ($this->laporanModel->save($data)) {
            return redirect()->to('/laporan')->with('success', 'Laporan berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambah laporan');
        }
    }

    // Form untuk mengedit laporan
    public function edit($id)
    {
        $data['laporan'] = $this->laporanModel->find($id);

        if (!$data['laporan']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Laporan tidak ditemukan');
        }

        return view('laporan/edit', $data);
    }

    // Menyimpan perubahan laporan
    public function update($id)
    {
        $data = $this->request->getPost();

        if ($this->laporanModel->update($id, $data)) {
            return redirect()->to('/laporan')->with('success', 'Laporan berhasil diperbarui');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui laporan');
        }
    }

    // Menghapus laporan
    public function delete($id)
    {
        if ($this->laporanModel->delete($id)) {
            return redirect()->to('/laporan')->with('success', 'Laporan berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus laporan');
        }
    }
}
