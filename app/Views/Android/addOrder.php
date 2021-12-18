<?php

$db = \Config\Database::connect();
$builder = $db->table('master_order');

$id_outlet = $_GET['id_outlet'];
$nama_outlet = $_GET['nama_outlet'];
$waktu_order = $_GET['waktu_order'];
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun'];
$alamat_order = $_GET['alamat_order'];
$no_telp = $_GET['no_telp'];
$order_55 = $_GET['order_55'];
$order_12 = $_GET['order_12'];
$konfirmasi = $_GET['konfirmasi'];
$query = $db->query("INSERT INTO `master_order` (`id_order`, `id_outlet`, `nama_outlet`, `waktu_order`, `bulan`, `tahun`, `alamat_order`, `no_telp`, `order_55`, `order_12`, `konfirmasi`) VALUES (NULL, '{$id_outlet}','{$nama_outlet}', '{$waktu_order}', '{$bulan}', '{$tahun}', '{$alamat_order}', '{$no_telp}', '{$order_55}', '{$order_12}', 'TIDAK');");

if ($query) {
    $jsonstr = json_encode(array(
        'status' => 'Ok'
    ));
    echo $jsonstr;
} else {
    $jsonstr = json_encode(array(
        'status' => 'No'
    ));
    echo $jsonstr;
}
