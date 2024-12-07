<?php

namespace App\Models;

use CodeIgniter\Model;

class PembeliModel extends Model
{
    protected $table      = 'pembeli';
    protected $primaryKey = 'id_pembeli';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_pembeli', 'alamat_pembeli', 'telepon_pembeli', 'email_pembeli'];
}
