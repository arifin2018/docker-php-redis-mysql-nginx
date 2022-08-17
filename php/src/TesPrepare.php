<?php
require_once dirname(__FILE__) . '/Helper/GetConnection.php';

$connection = GetConnection();

$name = "azriel";
$password = "azriel";
// Get Query select
$sql = <<<SQL
    SELECT * FROM admin
    WHERE name = :name
    AND password = :password
SQL;


// Insert Query
// $sql = <<<SQL
//     INSERT INTO admin(id, name, password) VALUES (?,?,?);
// SQL;


$result = $connection->prepare($sql);

// Get Query select
// $result->bindParam("name", $name);
// $result->bindParam("password", $password);
// $result->execute();
$result->execute(['name' => $name, 'password' => $password]);


$success = false;
$findUser = null;
foreach ($result as $key => $value) {
    $findUser = $value[1];
    $success = true;
}

if ($success) {
    echo "sukses login sebagai " . $findUser . PHP_EOL;
} else {
    echo "gagal login " .  PHP_EOL;
}


// Insert Query
// $result->execute([1, $name, $password]);


$connection = null;
