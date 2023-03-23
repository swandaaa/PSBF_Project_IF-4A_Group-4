<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BankModel;

class BankController extends BaseController
{
    public function index()
    {
        $proyek_model = new BankModel();
        $dataBank = $proyek_model->getData();
        return view('bank',['data' => $dataBank]);
    }
}
