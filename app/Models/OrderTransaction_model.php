<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderTransaction_model extends Model
{
    protected $table = 'master_order';


    public function getOrder($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function order_konfirmasi()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('master_order');
        $builder->where('konfirmasi', 'TIDAK');

        $query = $builder->get()->getResultArray();
        return $query;
    }


    public function order_pilih($bulan, $tahun)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('master_order');
        $builder->where('bulan', $bulan);
        $builder->where('tahun', $tahun);
        $query = $builder->get()->getResultArray();
        return $query;
    }


    public function order_proses()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('master_order');
        $builder->where('konfirmasi', 'PROSES');
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function exportExcel()
    {
        return $this->findAll();
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


    public function konfirmasi($data, $id_order){
        return $this->db->table($this->table)->update($data, ['id_order' => $id_order]);
    }

}
