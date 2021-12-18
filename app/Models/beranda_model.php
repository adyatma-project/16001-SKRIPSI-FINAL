<?php

namespace App\Models;

use CodeIgniter\Model;

class beranda_model extends Model
{
    protected $table = 'master_order';

    // hitung total data pada transaction

    function Jum_mahasiswa_perjurusan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('master_order');
        // $builder->like('nama_outlet', 'ADYATMA');
        // $builder->where('order_55 >', 0);
        $builder->where('konfirmasi =', 'YA');
        $builder->selectSum('order_12');
        return $builder->get()->getResult();
    }
}
