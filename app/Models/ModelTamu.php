<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTamu extends Model
{
    protected $table = 'buku_tamu'; 
    protected $primaryKey = 'id_tamu';  

    protected $allowedFields = ['id_tamu', 'nama_tamu', 'relasi_tamu', 'pesan_tamu']; 

    public function getTamu()
    {
        return $this->select('nama_tamu, relasi_tamu')->findAll();
    }
}
