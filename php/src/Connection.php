<?php

$host = "database";
$port = 3306;
$database = "MYSQL_DATABASE";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";


try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully" . PHP_EOL;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . PHP_EOL;
}
