<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWarning extends Model
{
    protected $table = 'buku_warning'; 
    protected $primaryKey = 'id_warning';  
    protected $allowedFields = ['detail_warning', 'pelapor_warning', 'status_warning'];
}
