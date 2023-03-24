<?php

namespace App\Controllers;
use App\Models\KategoriRuanganModels;

class KategoriRuanganController extends BaseController
{
    // protected $kruangan;
    // public function __construct ()
    // {
    //     $this->kruangan = new KategoriRuanganModels();
    // }
    // public function index(){
    //     $getdata = $this->kruangan->getdata();
    //     $data = array (
    //     'dataKategoriRuangan' => $getdata,
    //     );
    //     return view('kategori_ruangan',$data);
        public function index()
        {
        $dataKategori = new KategoriRuanganModels;
        $data = $dataKategori->getdata();
        return view('kategori_ruangan',['data'=>$data]);

        }
        // var_dump($getdata);
    }

