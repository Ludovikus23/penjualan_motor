<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan'; // Nama tabel
    protected $primaryKey = 'id_pelanggan'; // Kolom primary key
    protected $allowedFields = ['nama_pelanggan', 'alamat_pelanggan', 'telepon_pelanggan', 'email_pelanggan', 'tanggal_daftar']; // Kolom yang dapat diisi
    protected $useTimestamps = false; // Jika tidak ada kolom created_at dan updated_at
}
