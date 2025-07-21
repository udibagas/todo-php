<?php

$username = 'postgres';
$password = 'postgres';

$host = 'localhost';
$port = '5432';
$dbname = 'todos';

// Create a new PDO instance
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
// echo "Connected to the database successfully!";
