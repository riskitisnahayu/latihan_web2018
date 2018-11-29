<?php
$file = fopen("contoh.txt", "r") or die("File tidak ditemukan!");
echo fread($file,filesize("contoh.txt"));
fclose($file);
?>
