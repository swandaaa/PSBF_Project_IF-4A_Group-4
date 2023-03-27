<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class signupController extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        return view('signup');
    }
    public function insert()
    {
        $rules = [
            'iduser' => 'required',
            'un' => 'required',
            'pw' => 'required',
            'level' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back();
        }

        $user_model = new UserModel();
        $data = array(
            'ID_USER' => $this->request->getPost('iduser'),
            'USERNAME' => $this->request->getPost('un'),
            'PASSWORD' => $this->request->getPost('pw'),
            'ID_LEVEL' => $this->request->getPost('level')
        );
        $user_model->insertData($data);
        return redirect()->back();
    }
}
