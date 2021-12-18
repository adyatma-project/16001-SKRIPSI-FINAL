<?php

namespace App\Models;

use CodeIgniter\Model;

class beranda_model extends Model
{
    protected $table = 'master_order';

    public function siswaPertahun()
    {
        $query = "SELECT tahun AS TAHUN, COUNT(*) AS order_12 FROM master_order
                    GROUP BY tahun";
        $result = $this->db->query($query)->getresult();
        return $result;
    }

}
