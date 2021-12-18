<?php

$db = \Config\Database::connect();
$builder = $db->table('master_order');
$id_order = $_GET['id_order'];
$id_outlet = $_GET['id_outlet'];
$builder->where('id_outlet', $id_outlet);
$builder->like('id_order', $id_order);
$tampil_hitung = $builder->get();
$data = array();
foreach ($tampil_hitung->getResult() as $key => $row) :
    $data[] = array(
        'id_order' => $row->id_order,
        'no_telp' => $row->no_telp,
        'waktu_order' => $row->waktu_order,
        'order_55' => $row->order_55,
        'order_12' => $row->order_12,
        'konfirmasi' => $row->konfirmasi,
        'alamat_order' => $row->alamat_order,
    );

endforeach;

echo json_encode(array(
    'hasil' => $data
));
