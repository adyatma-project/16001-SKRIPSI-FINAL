<?php

$db = \Config\Database::connect();
$builder = $db->table('outlet_list');

$name_outlet = $_GET['name_outlet'];
$address_outlet = $_GET['address_outlet'];
$complete_data = $_GET['complete_data'];
$phone_oulet = $_GET['phone_outlet'];
$query = $db->query("UPDATE `outlet_list` SET `name_outlet` = '{$name_outlet}', `address_outlet` = '{$address_outlet}', `complete_data` = '{$complete_data}' WHERE phone_outlet = '{$phone_oulet}'");

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
