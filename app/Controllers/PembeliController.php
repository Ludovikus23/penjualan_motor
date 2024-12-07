<?php

namespace App\Controllers;

use App\Models\PembeliModel;

class PembeliController extends BaseController
{
    protected $pembeliModel;

    public function __construct()
    {
        $this->pembeliModel = new PembeliModel();
    }

  // Menampilkan daftar pembeli
  public function index()
  {
      $model = new PembeliModel();
      $data['pembeli'] = $model->findAll();
      
      return view('pembeli/index', $data); 
  }

    // Menampilkan form untuk menambah pembeli
    public function create()
    {
        return view('pembeli/create');
    }

    // Menyimpan pembeli baru
    public function store()
    {
        $data = [
            'nama_pembeli'      => $this->request->getPost('nama_pembeli'),
            'alamat_pembeli'    => $this->request->getPost('alamat_pembeli'),
            'telepon_pembeli'   => $this->request->getPost('telepon_pembeli'),
            'email_pembeli'     => $this->request->getPost('email_pembeli')
        ];

        $this->pembeliModel->save($data);
        return redirect()->to(base_url('pembeli'));
    }

    // Menampilkan form untuk edit pembeli
    // Menampilkan form untuk edit pembeli
    public function edit($id)
    {
        $data['pembeli'] = $this->pembeliModel->find($id);
        if (!$data['pembeli']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pembeli tidak ditemukan');
        }
        return view('pembeli/edit', $data);
    }
    // Memperbarui data pembeli
    public function update($id)
    {
        $data = [
            'nama_pembeli'      => $this->request->getPost('nama_pembeli'),
            'alamat_pembeli'    => $this->request->getPost('alamat_pembeli'),
            'telepon_pembeli'   => $this->request->getPost('telepon_pembeli'),
            'email_pembeli'     => $this->request->getPost('email_pembeli')
        ];

        $this->pembeliModel->update($id, $data);
        return redirect()->to(base_url('pembeli'));
    }

    // Menghapus data pembeli
  // Menghapus data pembeli
  public function delete($id)
  {
      $this->pembeliModel->delete($id);
      return redirect()->to(base_url('pembeli'));
  }
      
}