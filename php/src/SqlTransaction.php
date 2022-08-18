<?php
require_once dirname(__FILE__) . '/Helper/GetConnection.php';

$connection = GetConnection();

$connection->beginTransaction();

$sql = <<<SQL
    INSERT INTO comments(name, text) VALUES (?,?);
SQL;

$name = "azriel";
$text = "azriel";
try {
    $result = $connection->prepare($sql);
    $result->execute([$name, $text]);
    $connection->commit();
    echo 'berhasil' . PHP_EOL;
} catch (\Throwable $e) {
    $connection->rollBack();
    echo 'tidak berhasil' . PHP_EOL;
}

$connection = null;
