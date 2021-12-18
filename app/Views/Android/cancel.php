<?php

$db = \Config\Database::connect();
$builder = $db->table('master_order');

$id_order = $_GET['id_order'];

$sql = $db->query('DELETE FROM master_order WHERE id_order="' . $_GET['id_order'] . '"');

if ($sql) {
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
