<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;

class PembayaranController extends BaseController
{
    public function index()
    {
        $proyek_model = new PembayaranModel();
        $dataPembayaran = $proyek_model->getData();
        return view('Pembayaran',['data' => $dataPembayaran]);
    }
}
