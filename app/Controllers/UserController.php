<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $proyek_model = new UserModel();
        $dataUser = $proyek_model->getData();
        return view('user',['data' => $dataUser]);
    }
}
