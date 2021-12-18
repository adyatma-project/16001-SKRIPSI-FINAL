<?php

namespace App\Models;

use CodeIgniter\Model;

class drp_model extends Model
{
    protected $table = 'master_order';

    public function getOrder($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_outlet' => $id]);
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
