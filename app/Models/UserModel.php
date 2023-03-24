<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function getData()
    {
        $db = db_connect();
        $sql = 'SELECT * FROM user';
        $query = $db->query($sql);
        return $query;
    }
}
