<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = [
        'id_pembeli',
        'id_motor',
        'jumlah',
        'total_harga',
        'status_pesanan',

        'tanggal_pesanan'
    ];

    // Mendapatkan semua data pesanan
    public function getPesanan()
    {
        return $this->findAll();
    }

    // Mendapatkan pesanan berdasarkan status
    public function getPesananByStatus($status)
    {
        return $this->where('status_pesanan', $status)->findAll();
    }

    // Mendapatkan pesanan berdasarkan ID
    public function getPesananById($id)
    {
        return $this->find($id);
    }

    

}
