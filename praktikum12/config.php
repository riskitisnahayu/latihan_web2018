<?php
$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; // Mysql password
$db_name = "praktikum12"; // Database name
$dsn = "mysql:host=$host;dbname=$db_name"; 
// Database handler
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); // Untuk menampilkan error dengan exceptions (TRY...CATCH)
?>
