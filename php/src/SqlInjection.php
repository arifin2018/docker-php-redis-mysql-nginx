<?php
require_once dirname(__FILE__) . '/Helper/GetConnection.php';

$connection = GetConnection();

$username   = $connection->quote('admin');
$password   = $connection->quote('admin');
// $username   = "admin'; #";
// $password   = 'admin';
$sql        = "SELECT * FROM admin WHERE name = $username AND password = $password";

$statment = $connection->query($sql);

$success = false;
$findUser = null;
foreach ($statment as $key => $value) {
    $findUser = $value[1];
    $success = true;
}

if ($success) {
    echo "sukses login sebagai " . $findUser . PHP_EOL;
} else {
    echo "gagal login " .  PHP_EOL;
}
