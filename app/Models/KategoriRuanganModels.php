<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriRuanganModels extends Model
{
    
    public function getdata (){
    
        $query = $this->db->query("select * from kategori_ruangan");

        return $query->getResult();
    }
}