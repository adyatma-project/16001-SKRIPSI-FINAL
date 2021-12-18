<?php

namespace App\Models;

use CodeIgniter\Model;

class Penjualan_Model extends Model
{
    protected $table = 'master_order';
    protected $table2 = 'detail_penjualan';
    public function getAllData()
    {
        return $this->db->table($this->table)->get()->getResult();
    }
    public function getAllDataKhusus()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }

    public function getLastId()
    {
        $this->db->table($this->table)->orderBy("id_penjualan", "DESC");
        return $this->db->table($this->table)->get()->getRow();
    }
    public function tambah_data()
    {
        $hasil = 0;
        $barang = $this->input->post('id_barang');
        $jumlah = $this->input->post('jumlah');

        for ($i = 0; $i < sizeof($barang); $i++) {
            $hasil += $jumlah[$i];
            $data = array(
                'id_penjualan' => $this->input->post('id_penjualan', true),
                'id_barang' => $barang[$i],
                'jumlah' => $jumlah[$i]
            );
            $db      = \Config\Database::connect();
            $builder = $db->table('detail_penjualan');
            $builder->insert($data);
        }

        $data = array(
            'id_penjualan' => $this->input->post('id_penjualan', true),
            'tahun' => $this->input->post('tahun', true),
            'bulan' => $this->input->post('bulan', true),
            'hasil_penjualan' => $hasil
        );
        $db      = \Config\Database::connect();
        $builder = $db->table('penjualan');
        $builder->insert($data);
    }

    public function ubah_data($kd)
    {
        $data = array(
            'tahun' => $this->input->post('tahun', true),
            'bulan' => $this->input->post('bulan', true),
            'hasil_penjualan' => $this->input->post('hasil_penjualan', true),
        );

        $db      = \Config\Database::connect();
        $builder = $db->table('penjualan');
        $builder->where('id_penjualan', $kd);
        $builder->update($data);
    }

    public function hapus_data($kode)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('penjualan');
        $builder1 = $db->table('detail_penjualan');
        $builder->delete(['id_penjualan' => $kode]);
        $builder1->delete(['id_penjualan' => $kode]);
    }

    public function detail_data($kode)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('penjualan');
        $query = $builder->getWhere(['id_penjualan' => $kode]);
        return $this->$query->row_array();
    }

    public function detail_dataPenjualan($kd)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('detail_penjualan');
        $builder->select('*');
        $builder->join('barang', 'detail_penjualan.id_barang = barang.id_barang');
        $builder->where('detail_penjualan.id_penjualan', $kd);
        $query = $builder->get();
        return $this->$query->result();
    }

    public function hitung()
    {
        // $this->db->query("SELECT tahun, bulan, SUM(hasil_penjualan) FROM penjualan GROUP BY tahun, bulan ORDER BY tahun, bulan ASC");

        $db      = \Config\Database::connect();
        $builder = $db->table('penjualan');

        // $builder->select('(SELECT SUM(payments.amount) FROM penjualan WHERE payments.invoice_id=4) AS hasil', false);
        // $query = $builder->get();

        $builder->select("tahun, bulan, sum(hasil_penjualan) as hasil");
        $builder->from("penjualan");
        $builder->orderBy('tahun', 'ASC');
        $builder->orderBy('bulan', 'ASC');
        $builder->groupBy(array('tahun', 'bulan'));
        // $this->db->group_by('bulan', 'ASC');
        $query = $builder->get();
        return $this->$query->result();
    }
}
