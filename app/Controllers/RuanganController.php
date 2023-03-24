<?php

namespace App\Controllers;
use App\Models\RuanganModels;
use App\Controllers\BaseController;

class RuanganController extends BaseController
{
    // protected $ruangan;
    // public function __construct()
    // {
    //     $this->ruangan  = new RuanganModels();
    // }
    public function index()
    {
        // $getdata = $this->ruangan->getdata();
        // $dataRuangan = array('data' =>$getdata,
        // );
        // return view('ruangan', $dataRuangan);
        $getdata = new RuanganModels();
        $dataRuangan = $getdata->getdata();
        return view('ruangan',['data'=>$dataRuangan]);

        // var_dump($getdata);
        // dd($dt);
    }


}
