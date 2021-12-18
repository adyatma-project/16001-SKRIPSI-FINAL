<?php

$db = \Config\Database::connect();

$sql = $db->query('SELECT *FROM information WHERE id="' . $_GET['id'] . '"');

$jumlah = $sql->getNumRows();


foreach ($sql->getResult() as $row) {
    //echo $row->name_outlet;
    $data = array(
        'harga_5kg' => $row->harga_5kg,
        'harga_12kg' => $row->harga_12kg,
        'information' => $row->information,
    );
}

$jsonstr = json_encode($data);
echo $jsonstr;
