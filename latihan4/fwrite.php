<?php
$file = fopen("newContoh.txt", "w") or die("File tidak ditemukan!");
$txt = "Pemrograman Web 2\n";
fwrite($file, $txt);
$txt = "Materi PHP\n";
fwrite($file, $txt);
fclose($file);
?>
