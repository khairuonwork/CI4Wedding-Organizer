<?php

namespace App\Controllers;

use App\Models\ModelTamu;

class Wedding extends BaseController
{
    public function homepage()
    {
        return view('homepage'); //Emika
    }
    //Logic homepage
    public function submit_tamu()
    {
        $model = new ModelTamu();
        //Validasi
        $data = [
            'nama_tamu' => $this->request->getPost('Nama'), //Nama ini dari Form di views/homepage.php
            'relasi_tamu' => $this->request->getPost('Relasi'), //Relasi ini dari Form di views/homepage.php
            'pesan_tamu' => $this->request->getPost('Pesan') //Pesan ini dari Form di views/homepage.php
        ];

        if ($model->insert($data)) {
            session()->setFlashdata('success', 'Data has been submitted successfully!');
        } else {
            session()->setFlashdata('error', 'There was an error submitting your data.');
        }

        return redirect()->to('/capture'); // Redirect to the capture -> (wedding/capture, Wedding::capture (passing capture.php))
    }
    
    //Break
    public function capture()
    {
        return view('capture');
    }
    public function list_tamu()
    {
        return view('list_tamu');
    }
    public function rundown()
    {
        return view('rundown');
    }
    public function about()
    {
        return view('about'); //Gheffira
    }
}
