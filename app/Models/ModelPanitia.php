<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPanitia extends Model
{
    protected $table = 'buku_panitia'; 
    protected $primaryKey = 'id_panitia';  
    protected $allowedFields = ['nama_panitia', 'tugas_panitia'];
}
