<?php

namespace App\Controllers;

use App\Models\ModelTamu;
use App\Models\ModelPanitia;
class Wedding extends BaseController
{
    public function homepage()
    {
        return view('homepage'); 
    }
    //Logic homepage
    public function submit_tamu()
    {
        $model = new ModelTamu();
        //Validasi
        $data = [
            'nama_tamu' => $this->request->getPost('Nama'), //Nama ini dari Form di views/homepage.php
            'relasi_tamu' => $this->request->getPost('Relasi'), //Relasi ini dari Form di views/homepage.php
            'pesan_tamu' => $this->request->getPost('Pesan') //Relasi ini dari Form di views/homepage.php
        ];

        if ($model->insert($data)) {
            session()->setFlashdata('success', 'Data Masuk!');
        } else {
            session()->setFlashdata('error', 'Data Gagal Masuk!');
        }

        return redirect()->to('/capture'); // Redirect to the capture -> (wedding/capture, Wedding::capture (passing capture.php))
    }
    
    //Break
    public function capture()
    {
        return view('capture');
    }

    //Break
    // public function list_tamu()
    // {
    //     return view('list_tamu');
    // }
    public function list_fetching()
    {
        //Menggunakan logic pagination dari bootstrap
        $model = new ModelTamu();
        $data['datatamu'] = $model->getTamu();
    
        return view('list_tamu', $data);
    }
    
    //Break
    //Function untuk panitia
    public function roles()
    {
        $model = new ModelPanitia();
        $data['panitia'] = $model->findAll();
        return view('roles', $data);
    }

    public function addPanitia()
    {
        $model = new ModelPanitia();
        $model->insert([
            'nama_panitia' => $this->request->getPost('nama'),
            'tugas_panitia' => $this->request->getPost('tugas')
        ]);

        return redirect()->to('/roles');
    }

    public function updatePanitia($id)
    {
        $model = new ModelPanitia();
        $model->update($id, [
            'nama_panitia' => $this->request->getPost('nama'),
            'tugas_panitia' => $this->request->getPost('tugas')
        ]);

        return redirect()->to('/roles');
    }

    public function deletePanitia($id)
    {
        $model = new ModelPanitia();
        $model->delete($id);
        return redirect()->to('/roles');
    }

    public function rundown()
    {
        return view('rundown');
    }
    public function about()
    {
        return view('about'); //Gheffira & Emika
    }
    public function warning()
    {
        return view('warning'); //CRUD-> Database
    }
}











































































































































































































































































































































