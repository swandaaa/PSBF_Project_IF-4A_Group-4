<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyewaanModel extends Model
{
    protected $table = 'penyewaan';

    protected $allowFields = ['id_sewa', 'id_user', 'id_ruangan', 'tgl_sewa', 'durasi_sewa', 'ket'];
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM penyewaan");
        return $query->getResult();
    }
    public function insertData($data)
    {
        $this->db->table('penyewaan')->insert($data);
    }
}
