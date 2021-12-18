<?php

namespace App\Models;

use CodeIgniter\Model;

class Information_model extends Model
{
    protected $table = 'information';

    public function getInformation($id)
    {
        return $this->getWhere(['id' => $id]);
    }

    public function updateInformation($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
}
