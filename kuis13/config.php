<?php
$host 			= "localhost"; // Host name
$username 	= "root"; // MySQL username
$password 	= ""; // MySQL password
$db_name 		= "kuis"; // Database name
$dsn        = "mysql:host=$host;dbname=$db_name"; // Database handler
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              ); // Untuk menampilkan error dengan exceptions (TRY...CATCH)
?>
