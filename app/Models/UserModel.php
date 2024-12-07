<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'password']; // Kolom yang bisa diisi
    protected $useTimestamps = true; // Gunakan timestamps (created_at dan updated_at)
    protected $returnType = 'array';
}
