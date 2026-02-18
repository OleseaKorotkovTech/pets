<?php

$config = require __DIR__ . '/../config/database.php';

$dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8";

$pdo = new PDO($dsn, $config['user'], $config['password']);
