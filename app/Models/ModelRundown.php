<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRundown extends Model
{
    protected $table = 'buku_acara'; 
    protected $primaryKey = 'id_acara';  
    protected $allowedFields = ['waktu', 'nama_acara', 'detail_acara'];
}
