<?php

namespace App\Models;

use CodeIgniter\Model;

class Peramalan_Model extends Model
{
    public function getAllData()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('peramalan');
        $query = $builder->get();
        return $this->$query->result();
    }
    public function getAllDataKhusus()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('peramalan');
        $query = $builder->get();
        return $this->$query->result_array();
    }

    public function tambah_data($hasil)
    {
        $data = array(
            'tahun' => $this->input->post('tahun', true),
            'bulan' => $this->input->post('bulan', true),
            'hasil' => $hasil
        );
        $db      = \Config\Database::connect();
        $builder = $db->table('peramalan');
        $builder->insert($data);
    }

    public function hapus_data($kode)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('peramalan');;
        $builder->delete(['id_peramalan' => $kode]);
    }
}
