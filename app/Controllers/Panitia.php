<?php

namespace App\Controllers;

use App\Models\ModelPanitia;
use CodeIgniter\HTTP\Response;

class Panitia extends BaseController
{
    protected $panitiaModel;

    public function __construct()
    {
        $this->panitiaModel = new ModelPanitia();
    }

    // Fetch all panitia
    public function index()
    {
        return view('roles');
    }

    // Fetch all panitia (AJAX)
    public function getPanitia()
    {
        $data = $this->panitiaModel->getPanitia();
        return $this->response->setJSON($data);
    }

    // Add new panitia (AJAX)
    public function addPanitia()
    {
        $data = [
            'nama_panitia' => $this->request->getPost('nama'),
            'tugas_panitia' => $this->request->getPost('tugas')
        ];
        $this->panitiaModel->addPanitia($data);
        return $this->response->setJSON(['status' => 'success']);
    }

    // Update panitia (AJAX)
    public function updatePanitia($id)
    {
        $data = [
            'nama_panitia' => $this->request->getPost('nama'),
            'tugas_panitia' => $this->request->getPost('tugas')
        ];
        $this->panitiaModel->updatePanitia($id, $data);
        return $this->response->setJSON(['status' => 'success']);
    }

    // Delete panitia (AJAX)
    public function deletePanitia($id)
    {
        $this->panitiaModel->deletePanitia($id);
        return $this->response->setJSON(['status' => 'success']);
    }
}
