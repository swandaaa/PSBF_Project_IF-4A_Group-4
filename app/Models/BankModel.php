<?php

namespace App\Models;

use CodeIgniter\Model;

class BankModel extends Model
{
    public function getData()
    {
        $db = db_connect();
        $sql = 'SELECT * FROM bank';
        $query = $db->query($sql);
        return $query;
    }
}
