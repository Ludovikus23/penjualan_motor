<?php

namespace App\Models;

use CodeIgniter\Model;

class MotorModel extends Model
{
    protected $table = 'motor'; // Nama tabel
    protected $primaryKey = 'id_motor'; // Primary key
    protected $allowedFields = ['nama_motor', 'merk_motor', 'tipe_motor', 'harga', 'stok', 'deskripsi'];
}
