<?php

namespace App\Controllers;

use App\Models\PesananModel;

class PesananController extends BaseController
{
    protected $pesananModel;

    public function __construct()
    {
        $this->pesananModel = new PesananModel();
    }

    // Menampilkan semua pesanan
    public function index()
    {
        $data['pesanan'] = $this->pesananModel->getPesanan();
        return view('pesanan/index', $data);
    }

    // Menampilkan detail pesanan berdasarkan ID
    public function detail($id)
    {
        $data['pesanan'] = $this->pesananModel->getPesananById($id);
        if (!$data['pesanan']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pesanan tidak ditemukan');
        }
        return view('pesanan/detail', $data);
    }

    // Menambah data pesanan
    public function create()
    {
        return view('pesanan/create');
    }

    // Menyimpan data pesanan
    public function store()
    {
        $this->pesananModel->save([
            'id_pembeli' => $this->request->getPost('id_pembeli'),
            'id_motor' => $this->request->getPost('id_motor'),
            'jumlah' => $this->request->getPost('jumlah'),
            'total_harga' => $this->request->getPost('total_harga'),
            'status_pesanan' => $this->request->getPost('status_pesanan')
        ]);
        
        return redirect()->to('/pesanan')->with('success', 'Pesanan berhasil ditambahkan!');
    }

    // Menampilkan form edit pesanan
    public function edit($id) {
        // Mengambil data pesanan berdasarkan ID
        $data['pesanan'] = $this->pesananModel->find($id);
        if (!$data['pesanan']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pesanan tidak ditemukan');
        }
        return view('pesanan/edit', $data); // Menampilkan view edit pesanan
    }
    
    // Mengupdate data pesanan
    public function update($id)
    {
        $this->pesananModel->update($id, [
            'id_pembeli' => $this->request->getPost('id_pembeli'),
            'id_motor' => $this->request->getPost('id_motor'),
            'jumlah' => $this->request->getPost('jumlah'),
            'total_harga' => $this->request->getPost('total_harga'),
            'status_pesanan' => $this->request->getPost('status_pesanan')
        ]);
        
        return redirect()->to('/pesanan')->with('success', 'Pesanan berhasil diperbarui!');
    }

    // Menghapus data pesanan
    public function delete($id)
    {
        $this->pesananModel->delete($id);
        return redirect()->to('/pesanan')->with('success', 'Pesanan berhasil dihapus!');
    }
    
}
