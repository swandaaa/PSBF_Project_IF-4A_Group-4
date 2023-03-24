<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenyewaanModel;

class PenyewaanController extends BaseController
{
    public function index()
    {
        $proyek_model = new PenyewaanModel();
        $dataSewa = $proyek_model->getData();
        return view('penyewaan',['data' => $dataSewa]);
    }
}
