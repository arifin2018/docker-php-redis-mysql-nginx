<?php
require_once dirname(__FILE__) . '/Helper/GetConnection.php';

$connection = GetConnection();

$connection->beginTransaction();

$sql = <<<SQL
    INSERT INTO comments(name, text) VALUES (?,?);
SQL;

$name = "admin";
$text = "admin";

$result = $connection->prepare($sql);
$result->execute([$name, $text]);

$connection->commit();
$connection = null;
