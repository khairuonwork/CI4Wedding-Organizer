<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller
{
    public function index()
    {
        // Data anggota kelompok
        $data['group'] = "Kelompok 7 - 2AEC-1"; // Nama kelompok dan asal kelas
        $data['members'] = [
            [
                'nim' => '223443007',
                'name' => 'Daffa Khairul Ammar',
                'photo' => 'daffa.jpg'
            ],
            [
                'nim' => '223443010',
                'name' => 'Emika Difani Tesya Br Barus',
                'photo' => 'mika.jpg'
            ],
            [
                'nim' => '223443011',
                'name' => 'Gheffira Putri Nur Fatimah',
                'photo' => 'fira.jpg'
            ]
        ];

        // Menampilkan tampilan 'about' dengan data yang diberikan
        return view('about', $data);
    }
}
