<?php

$pdo = new PDO('mysql:dbname=dev_env_db;host=db', 'test', 'test', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];