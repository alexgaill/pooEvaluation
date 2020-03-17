<?php

namespace App\Model;

use Core\Model\Model;

class CategorieModel extends Model
{
    public function queryAll()
    {
        return $this->db->query("SELECT * FROM categories", false);
    }
}