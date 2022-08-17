<?php

require_once dirname(__FILE__) . '/Helper/GetConnection.php';

$connection = GetConnection();
$sql = "SELECT id,name,email FROM customers";
$tes = $connection->query($sql);
foreach ($tes as $row) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];

    echo "id    : $id" . PHP_EOL;
    echo "name  : $name" . PHP_EOL;
    echo "email : $email \n\n";
}

$connection = null;
