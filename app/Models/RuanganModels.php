<?php

namespace App\Models;

use CodeIgniter\Model;

class RuanganModels extends Model
{
    
    public function getdata(){
    
        // $query = $this->db->query("select * from ruangan");
        $query = $this->db->query("select * from RUANGAN");

        return $query->getResult();
    }
}