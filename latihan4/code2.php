<?php
$file = fopen("newContoh.txt", "w") or die("File tidak ditemukan!");
$txt = "Ini file newContoh\n";
fwrite($file, $txt);
$txt = "Untuk memberi contoh write file\n";
fwrite($file, $txt);
fclose($file);
?>
