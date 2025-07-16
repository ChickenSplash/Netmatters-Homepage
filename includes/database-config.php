<?php

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "netmatters-website";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$database;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // throw exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false, // use native prepared statements
];

// $host = "localhost";
// $username = "emanuelcorreia_n";
// $password = "netmatters135";
// $database = "emanuelcorreia_netmatters";
// $charset = "utf8mb4";