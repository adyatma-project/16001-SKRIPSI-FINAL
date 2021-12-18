<?php

namespace App\Models;

use CodeIgniter\Model;

class Outlet_model extends Model
{
    protected $table = 'outlet_list';

    public function getOutlet($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function insertOutlet($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateOutlet($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteOutlet($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
