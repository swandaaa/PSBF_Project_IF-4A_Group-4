<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TarifModel;

class TarifController extends BaseController
{
    public function index()
    {
        $proyek_model = new TarifModel();
        $dataTarif = $proyek_model->getData();
        return view('tarif', ['data' => $dataTarif]);
    }
}
