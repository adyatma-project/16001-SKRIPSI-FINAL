<?php

$db = \Config\Database::connect();

$sql = $db->query('SELECT *FROM outlet_list WHERE phone_outlet="' . $_GET['phone'] . '"');

$jumlah = $sql->getNumRows();

if ($jumlah > 0) {

    foreach ($sql->getResult() as $row) {
        //echo $row->name_outlet;
        $data = array(
            'status' => "data_ok",
            'name_outlet' => $row->name_outlet,
            'id' => $row->id,
            'address_outlet' => $row->address_outlet,
            'phone_outlet' => $row->phone_outlet,
            'complete_data' => $row->complete_data,
        );
    }
} else {
    $data = array(
        'status' => 'DATA TIDAK ADA'
    );
}
$jsonstr = json_encode($data);
echo $jsonstr;
