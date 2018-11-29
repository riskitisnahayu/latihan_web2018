/* fgetc.php */
<?php
$file = fopen("contoh.txt", "r") or die("File tidak ditemukan!");
echo fgetc($file);
fclose($file);
?>
