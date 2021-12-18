<?php

namespace App\Models;

use CodeIgniter\Model;

class Input_model extends Model
{
    protected $table = 'outlet_list';
    protected $table2 = 'master_order';

    public function gettest($id = false)
    {

        return $this->table('outlet_list')

            ->where(['id' => $id])
            ->get()
            ->getRowArray();
    }
    public function insertProduct($data)
    {
        return $this->db->table($this->table2)->insert($data);
    }

    public function updateProduct($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['product_id' => $id]);
    }

    public function deleteProduct($id)
    {
        return $this->db->table($this->table)->delete(['product_id' => $id]);
    }

    public function getPrice($id)
    {
        return $this->db->table($this->table)->getWhere(['product_id' => $id])->getRowArray();
    }
}
