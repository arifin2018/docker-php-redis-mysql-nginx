<?php
require_once dirname(__FILE__) . '/Helper/GetConnection.php';

$connection = GetConnection();

$name = "admin";
$password = "password";

$sql = <<<SQL
    SELECT * FROM admin
    WHERE name = :name
    AND password = :password
SQL;

$result = $connection->prepare($sql);
$result->bindParam("name", $name);
$result->bindParam("password", $password);
$result->execute();

$connection = null;
