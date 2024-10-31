<?php

namespace App\Controllers;

use App\Models\ModelTamu;
use App\Models\ModelPanitia;
use App\Models\ModelRundown;
use App\Models\ModelWarning;
use App\Models\ModelPesan;

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

    //Break
    //Function untuk Warning
    public function warning()
    {
        $model = new ModelWarning();
        $data['warning'] = $model->findAll();
        return view('warning', $data);
    }
    public function addWarning()
    {
        $model = new ModelWarning();
        $model->insert([
            'pelapor_warning' => $this->request->getPost('pelaporwarning'),
            'detail_warning'=>$this->request->getPost('detailwarning'),
            'status_warning'=>$this->request->getPost('statuswarning')
        ]);

        return redirect()->to('/warning');
    }
    public function updateWarning($id)
    {
        $model = new ModelWarning();
        $model->update($id, [
            'pelapor_warning' => $this->request->getPost('pelaporwarning'),
            'detail_warning'=>$this->request->getPost('detailwarning'),
            'status_warning'=>$this->request->getPost('statuswarning')
        ]);

        return redirect()->to('/warning');
    }
    public function deleteWarning($id)
    {
        $model = new ModelWarning();
        $model->delete($id);
        return redirect()->to('/warning');
    }

    //Break
    //Function untuk Rundown
    public function rundown()
    {
        $model = new ModelRundown();
        $data['rundown'] = $model->findAll();
        return view('rundown', $data);
    }
    public function addRundown()
    {
        $model = new ModelRundown();
        $model->insert([
            'waktu' => $this->request->getPost('waktu'),
            'nama_acara'=>$this->request->getPost('nama_acara'),
            'detail_acara'=>$this->request->getPost('detail_acara')
        ]);

        return redirect()->to('/rundown');
    }
    public function updateRundown($id)
    {
        $model = new ModelRundown();
        $model->update($id, [
            'waktu' => $this->request->getPost('waktu'),
            'nama_acara'=>$this->request->getPost('nama_acara'),
            'detail_acara'=>$this->request->getPost('detail_acara')
        ]);

        return redirect()->to('/rundown');
    }
    public function deleteRundown($id)
    {
        $model = new ModelRundown();
        $model->delete($id);
        return redirect()->to('/rundown');
    }

    public function pesan()
    {
        $model = new ModelPesan();
        $data['pesan'] = $model->select('pesan_tamu')->findAll();
        return view('pesan', $data);
    }

    //Break
    //Function untuk About
    public function about()
    {
        return view('about'); 
    }
}
