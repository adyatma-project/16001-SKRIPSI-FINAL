<?php

namespace App\Models;

use CodeIgniter\Model;

class check_model extends Model
{
    protected $table = 'outlet_list';

    public function getoutlet($id = false)
    {
        return $this->getWhere(['id' => $id]);
    }
}
