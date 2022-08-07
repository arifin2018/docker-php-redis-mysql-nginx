<?php

// phpinfo();

require_once dirname(__FILE__) . '/vendor/autoload.php';

use Predis\Client;

try {
    $redis = new Client();

    $redis->connect('redis', 6379);
    // printf("Connection to redis has been established...\n");
    echo "Connection to server sucessfully" . PHP_EOL;
    //check whether server is running or not 
    echo "Server is running: " . $redis->ping() . PHP_EOL;
} catch (Exception $e) {
    die($e->getMessage() . PHP_EOL);
}
