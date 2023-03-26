<?php

namespace App\Controllers;

use App\Models\RuanganModels;
use App\Controllers\BaseController;

class RuanganController extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {

        $getdata = new RuanganModels();
        $dataRuangan = $getdata->getdata();
        return view('ruangan', ['data' => $dataRuangan]);
    }
    public function insert()
    {
        $rules = [
            'id'    => 'required',
            'idKat' => 'required',
            'nama' => 'required',
            'kapasitas' => 'required',
            'status'    => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back();
        }

        $ruangan_model = new RuanganModels();
        $data = array(
            'ID_RUANGAN' => $this->request->getPost('id'),
            'ID_KET_RUANGAN' => $this->request->getPost('idKat'),
            'NAMA_RUANGAN' => $this->request->getPost('nama'),
            'KAPASITAS_RUANGAN' => $this->request->getPost('kapasitas'),
            'STATUS_RUANGAN' => $this->request->getPost('status')
        );
        $ruangan_model->insertData($data);
        return redirect()->back();
    }
}
