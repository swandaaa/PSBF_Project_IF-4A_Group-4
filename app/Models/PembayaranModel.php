<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    public function getData()
    {
        $db = db_connect();
        $sql = 'SELECT * FROM pembayaran';
        $query = $db->query($sql);
        return $query;
    }
}
