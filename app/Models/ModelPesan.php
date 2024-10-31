<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesan extends Model
{
    protected $table = 'buku_tamu'; 
    protected $primaryKey = 'id_panitia';  
    protected $allowedFields = ['pesan'];
}
