<?php
$var = "string";
$str1 = "contoh $var dengan tanda petik ganda";
$str2 = 'contoh $var dengan tanda petik ganda'; //tidak dapat membaca variabel
echo $str1;
echo "<br>";
echo $str2;
 ?>
