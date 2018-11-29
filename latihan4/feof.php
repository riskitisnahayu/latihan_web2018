<?php
$file = fopen("contoh.txt", "r") or die("File tidak ditemukan!");
while(!feof($file)) {
 echo fgets($file) . "<br/>";
}
fclose($file);
?>
