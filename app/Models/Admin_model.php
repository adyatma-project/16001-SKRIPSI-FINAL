<?php

namespace App\Models;

use CodeIgniter\Model;

class admin_model extends Model
{
    protected $table = 'users';

    public function getAdmin($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function updateAdmin($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteAdmin($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
