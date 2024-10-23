<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTamu extends Model
{
    protected $table = 'buku_tamu'; 
    protected $primaryKey = 'id_tamu'; 

    protected $allowedFields = ['id_tamu', 'nama_tamu', 'relasi_tamu', 'pesan_tamu']; 
        
    // protected $returnType = 'array';

    // protected $validationRules = [
    //     'nama_tamu' => 'required|min_length[3]|max_length[100]',
    //     'relasi_tamu' => 'required',
    //     'pesan_tamu' => 'required|max_length[250]',
    // ];

    // protected $validationMessages = [
    //     'nama_tamu' => [
    //         'required' => 'Nama tamu harus diisi.',
    //         'min_length' => 'Nama tamu minimal 3 karakter.',
    //         'max_length' => 'Nama tamu maksimal 100 karakter.'
    //     ],
    //     'relasi_tamu' => [
    //         'required' => 'Relasi tamu harus dipilih.'
    //     ],
    //     'pesan_tamu' => [
    //         'max_length' => 'Pesan tamu maksimal 255 karakter.'
    //     ]
    // ];

}
