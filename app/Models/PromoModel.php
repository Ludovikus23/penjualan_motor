<?php

// Di dalam app/Models/PromoModel.php
namespace App\Models;

use CodeIgniter\Model;

class PromoModel extends Model
{
    protected $table      = 'promos'; // Tabel promos di database
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields  = ['title', 'description', 'discount', 'start_date', 'end_date'];

    // Anda bisa menambahkan fungsi-fungsi lain untuk query lebih lanjut jika diperlukan
}
