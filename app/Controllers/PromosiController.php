<?php

namespace App\Controllers;

use App\Models\PromosiModel;

class PromosiCOntroller extends BaseController
{
    protected $promosiModel;

    public function __construct()
    {
        $this->promosiModel = new PromosiModel();
    }

    // Menampilkan semua promosi
    public function index()
    {
        $data['promosi'] = $this->promosiModel->findAll();
        return view('promosi/index', $data);
    }

    // Menampilkan detail promosi berdasarkan ID
    public function detail($id)
    {
        $data['promosi'] = $this->promosiModel->find($id);
        if (!$data['promosi']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Promosi tidak ditemukan');
        }
        return view('promosi/detail', $data);
    }

    // Menambah data promosi
    public function create()
    {
        return view('promosi/create');
    }

    // Menyimpan data promosi
    public function store()
    {
        $this->promosiModel->save([
            'nama_promosi' => $this->request->getPost('nama_promosi'),
            'deskripsi_promosi' => $this->request->getPost('deskripsi_promosi'),
            'tanggal_mulai' => $this->request->getPost('tanggal_mulai'),
            'tanggal_berakhir' => $this->request->getPost('tanggal_berakhir'),
            'diskon' => $this->request->getPost('diskon')
        ]);
        
        return redirect()->to('/promosi')->with('success', 'Promosi berhasil ditambahkan!');
    }

    // Menampilkan form edit promosi
    public function edit($id)
    {
        // Mengambil data promosi berdasarkan ID
        $data['promosi'] = $this->promosiModel->find($id);
        if (!$data['promosi']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Promosi tidak ditemukan');
        }
        return view('promosi/edit', $data); // Menampilkan view edit promosi
    }

    // Mengupdate data promosi
    public function update($id)
    {
        $this->promosiModel->update($id, [
            'nama_promosi' => $this->request->getPost('nama_promosi'),
            'deskripsi_promosi' => $this->request->getPost('deskripsi_promosi'),
            'tanggal_mulai' => $this->request->getPost('tanggal_mulai'),
            'tanggal_berakhir' => $this->request->getPost('tanggal_berakhir'),
            'diskon' => $this->request->getPost('diskon')
        ]);
        
        return redirect()->to('/promosi')->with('success', 'Promosi berhasil diperbarui!');
    }

    // Menghapus data promosi
    public function delete($id)
    {
        $this->promosiModel->delete($id);
        return redirect()->to('/promosi')->with('success', 'Promosi berhasil dihapus!');
    }
}
