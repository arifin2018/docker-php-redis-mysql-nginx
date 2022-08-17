<?php

require_once dirname(__FILE__) . '/Helper/GetConnection.php';

$connection = GetConnection();

$xml = <<<XML
    INSERT INTO customers (id, name, email) VALUES (2,'azriel','azriel')
    INSERT INTO admin (id, name, password) VALUES (2,'admin','admin')
XML;

$connection->exec($xml);

$connection = null;
