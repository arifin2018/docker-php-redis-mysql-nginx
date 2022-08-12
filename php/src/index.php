<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

use Predis\Client;

try {
    $redis = new Client([
        'host'      => 'redis',
        'port'      => 6379,
        'password'  => 'REDIS_PASSWORD'
    ]);
    // $redis->set('name', 'Wai Yan Hein', 'EX', 500);
    echo $redis->get('name') . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
