<?php

$host = 'localhost'; 
$dbname = 'your_database_name'; 
$username = 'your_username'; 
$password = 'your_password'; 

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$db->exec("SET NAMES 'utf8'");


