<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';
    protected $allowedFields = ['tanggal_laporan', 'total_pendapatan', 'total_motor_terjual', 'total_pelanggan'];
    protected $useTimestamps = true;

    // Untuk validasi data jika diperlukan
    protected $validationRules = [
        'tanggal_laporan' => 'required|valid_date',
        'total_pendapatan' => 'required|decimal',
        'total_motor_terjual' => 'required|integer',
        'total_pelanggan' => 'required|integer',
    ];
}
