<?php
$a = 15;
echo "<b>Bila a++ di luar echo</b><br />";
echo "a=$a ditambah 1 ";
$a++;
echo "menjadi $a <br /><br />";

//Tetapi bila $a++ berada di dalam echo
echo "<b>Bila a++ di dalam echo</b><br />";
echo "a=$a, nilai a++ di dalam echo: ";
echo $a++;
echo "<br />";

echo "Tetapi sesudahnya menjadi $a<br /><br />";

//Bila ++$a, maka nilai $a ditambahkan dulu baru dipakai
echo "<b>Bila ++a di dalam echo</b><br />";
echo "a=$a, nilai ++a di dalam echo: ";
echo ++$a;
echo "<br />";

echo "Nilai a sesudah pernyataan tetap $a";
?>
