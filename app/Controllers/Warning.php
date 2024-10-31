<?php

namespace App\Controllers;

use App\Models\ModelWarning;
use CodeIgniter\HTTP\Response;

class Warning extends BaseController
{
    protected $warningModel;

    public function __construct()
    {
        $this->warningModel = new ModelWarning();
    }

    // Fetch all warning
    public function index()
    {
        return view('warning');
    }

    // Fetch all warning (AJAX)
    public function getWarning()
    {
        $data = $this->warningModel->getWarning();
        return $this->response->setJSON($data);
    }

    // Add new panitia (AJAX)
    public function addWarning()
    {
        $data = [
            'pelapor_warning' => $this->request->getPost('pelaporwarning'),
            'detail_warning'=>$this->request->getPost('detailwarning'),
            'status_warning'=>$this->request->getPost('statuswarning')
        ];
        $this->warningModel->addWarning($data);
        return $this->response->setJSON(['status' => 'success']);
    }

    // Update panitia (AJAX)
    public function updateWarning($id)
    {
        $data = [
            'pelapor_warning' => $this->request->getPost('pelaporwarning'),
            'detail_warning'=>$this->request->getPost('detailwarning'),
            'status_warning'=>$this->request->getPost('statuswarning')
        ];
        $this->warningModel->updateWarning($id, $data);
        return $this->response->setJSON(['status' => 'success']);
    }

    // Delete panitia (AJAX)
    public function deleteWarning($id)
    {
        $this->warningModel->deleteWarning($id);
        return $this->response->setJSON(['status' => 'success']);
    }
}
