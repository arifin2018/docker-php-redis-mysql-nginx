<?php

require_once dirname(__FILE__) . '/Helper/GetConnection.php';

$connection = GetConnection();

// $sql = <<<SQL
//     SELECT * FROM admin
// SQL;

// $result = $connection->prepare($sql);
// $result->execute();
// $row = $result->fetchAll();
// var_dump($row);

$sql = <<<SQL
    SELECT * FROM admin
    WHERE name = :name
    AND password = :password
SQL;

$name = "admin";
$password = "admin";
$result = $connection->prepare($sql);
$result->execute(['name' => $name, 'password' => $password]);

if ($row = $result->fetch()) {
    echo "sukses login sebagai " . $row[1] . PHP_EOL;
} else {
    echo "gagal login " .  PHP_EOL;
}
