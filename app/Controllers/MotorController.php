<?php

namespace App\Controllers;

use App\Models\MotorModel;

class MotorController extends BaseController
{
    protected $motorModel;

    public function __construct()
    {
        // Inisialisasi model
        $this->motorModel = new MotorModel();
    }

    public function motor()
    {
        // Mengambil semua data motor
        $data['motor'] = $this->motorModel->findAll();

        // Mengirim data ke view untuk ditampilkan
        return view('motor/index', $data);
    }

    public function create()
    {
        return view('motor/create', [
            'title' => 'Tambah Data Motor'
        ]);
    }

    public function store()
    {
        // Validasi input
        if (!$this->validate([
            'nama_motor' => 'required|min_length[3]',
            'merk_motor' => 'required',
            'tipe_motor' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'required|min_length[10]',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Simpan data
        $this->motorModel->save($this->request->getPost());

        return redirect()->to('/motor')->with('success', 'Data motor berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $motor = $this->motorModel->find($id);

        // Jika data tidak ditemukan
        if (!$motor) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Motor tidak ditemukan');
        }

        return view('motor/edit', [
            'title' => 'Edit Data Motor',
            'motor' => $motor
        ]);
    }

    public function update($id)
    {
        // Validasi input
        if (!$this->validate([
            'nama_motor' => 'required|min_length[3]',
            'merk_motor' => 'required',
            'tipe_motor' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'required|min_length[10]',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Update data
        $this->motorModel->update($id, $this->request->getPost());

        return redirect()->to('/motor')->with('success', 'Data motor berhasil diperbarui!');
    }
}
