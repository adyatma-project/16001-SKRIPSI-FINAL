<?php

$db = \Config\Database::connect();
$builder = $db->table('master_order');
$id_outlet = $_GET['id_outlet'];
$builder->like('id_outlet', $id_outlet);
$builder->orderBy('id_order', 'DESC');
$tampil_hitung = $builder->get();
$data = array();
foreach ($tampil_hitung->getResult() as $key => $row) :
    $data[] = array(
        'id_outlet' => $row->id_outlet,
        'id_order' => $row->id_order,
        'no_telp' => $row->no_telp,
        'waktu_order' => $row->waktu_order,
        'order_55' => $row->order_55,
        'order_12' => $row->order_12,
        'konfirmasi' => $row->konfirmasi,
    );

endforeach;

echo json_encode(array(
    'hasil' => $data
));
