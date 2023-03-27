<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenyewaanModel;

class PenyewaanController extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        $proyek_model = new PenyewaanModel();
        $dataSewa = $proyek_model->getData();
        return view('penyewaan',['data' => $dataSewa]);
    }
    public function insert()
    {
    
        $val = [
            'id' => 'required',
            'id_user' => 'required',
            'id_ruangan' => 'required',
            'tgl_sewa' => 'required',
            'durasi_sewa' => 'required',
            'ket' => 'required'
        ];

        if (!$this->validate($val))
        {
            return redirect()->back();
        }
            
        $penyewaan_model = new PenyewaanModel();
        $data = array(
            'ID_SEWA' => $this->request->getPost('id'),
            'ID_USER' => $this->request->getPost('id_user'),
            'ID_RUANGAN' => $this->request->getPost('id_ruangan'),
            'TGL_SEWA' => $this->request->getPost('tgl_sewa'),
            'DURASI_SEWA' => $this->request->getVar('durasi_sewa'),
            'KET' => $this->request->getPost('ket')
        );
        $penyewaan_model->insertData($data);
        return redirect()->back();
    }
}

