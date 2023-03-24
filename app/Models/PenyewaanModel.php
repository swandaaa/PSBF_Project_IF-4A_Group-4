<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyewaanModel extends Model
{
    public function getData()
    {
        $db = db_connect();
        $sql = 'SELECT * FROM penyewaan';
        $query = $db->query($sql);
        return $query;
    }
}
