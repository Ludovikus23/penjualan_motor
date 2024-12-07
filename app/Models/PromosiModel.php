<?php

namespace App\Models;

use CodeIgniter\Model;

class PromosiModel extends Model
{
    protected $table = 'promosi';
    protected $primaryKey = 'id_promosi';
    protected $allowedFields = ['nama_promosi', 'deskripsi_promosi', 'tanggal_mulai', 'tanggal_berakhir', 'diskon'];
}
