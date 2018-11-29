<?php
$x = 5;
$y = 10;
$z = 2;

function myTest()
{
    global $z;
    echo "Variabel global z yaitu $z";
    echo "<br>";

    global $x, $y;
    $y = $x + $y;
    $a = 1; //local scope
    echo "Variabel local a yaitu $a";
}

myTest();
echo "<br>";
echo $y;
echo "<br>";
?>
