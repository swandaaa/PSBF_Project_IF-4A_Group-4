<?php

namespace App\Models;

use CodeIgniter\Model;

class RuanganModels extends Model
{
    protected $table = 'ruangan';
    protected $allowedFields = ['id_ruangan', 'id_ket_ruangan', 'nama_ruangan', 'kapasitas_ruangan', 'status_ruangan'];
    public function getdata()
    {
        $query = $this->db->query("select * from RUANGAN");

        return $query->getResult();
    }
    public function insertData($data)
    {
        $this->db->table('ruangan')->insert($data);
    }
}
