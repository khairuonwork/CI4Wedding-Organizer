<?php

namespace App\Controllers;

use App\Models\ModelRundown;
use CodeIgniter\HTTP\Response;

class Rundown extends BaseController
{
    protected $rundownModel;

    public function __construct()
    {
        $this->rundownModel = new ModelRundown();
    }

    // Fetch all panitia
    public function index()
    {
        return view('rundown');
    }

    // Fetch all panitia (AJAX)
    public function getRundown()
    {
        $data = $this->rundownModel->getRundown();
        return $this->response->setJSON($data);
    }

    // Add new panitia (AJAX)
    public function addRundown()
    {
        $data = [
            'waktu' => $this->request->getPost('waktu'),
            'nama_acara' => $this->request->getPost('nama'),
            'detail_acara' => $this->request->getPost('detail')
        ];
        $this->rundownModel->addRundown($data);
        return $this->response->setJSON(['status' => 'success']);
    }

    // Update panitia (AJAX)
    public function updateRundown($id)
    {
        $data = [
            'waktu' => $this->request->getPost('waktu'),
            'nama_acara' => $this->request->getPost('nama'),
            'detail_acara' => $this->request->getPost('detail')
        ];
        $this->rundownModel->updateRundown($id, $data);
        return $this->response->setJSON(['status' => 'success']);
    }

    // Delete panitia (AJAX)
    public function deleteRundown($id)
    {
        $this->rundownModel->deleteRundown($id);
        return $this->response->setJSON(['status' => 'success']);
    }
}
