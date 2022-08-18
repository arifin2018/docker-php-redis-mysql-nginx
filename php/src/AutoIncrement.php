<?php

require_once dirname(__FILE__) . '/Helper/GetConnection.php';

$connection = GetConnection();

$sql = <<<SQL
    INSERT INTO comments(name, text) values (?,?);
SQL;

$name = "arifin";
$text = "ganteng";

$result = $connection->prepare($sql);
$result->execute([$name, $text]);
// if ($row = $result->fetch()) {
//     echo "sukses login sebagai " . $row[1] . PHP_EOL;
// } else {
//     echo "gagal login " .  PHP_EOL;
// }

$id = $connection->lastInsertId();
echo $id . PHP_EOL;


$connection = null;
