<?php

namespace App\Models;

use CodeIgniter\Model;

class TarifModel extends Model
{
    public function getData()
    {
        $db = db_connect();
        $sql = 'SELECT * FROM tarif';
        $query = $db->query($sql);
        return $query;
    }
}
