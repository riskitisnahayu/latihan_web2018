<?php
$a=0b10110101;
$b=0b01101100;
echo "\$a = 10110101 = $a"; echo "<br />";
echo "\$b = 01101100 = $b"; echo "<br />";
echo "<br />";

echo "==Hasil Bitwise=="; echo "<br />";
$hasil = $a & $b;
echo "1. \$a & \$b = $hasil"; echo "<br />";
$hasil = $a | $b;
echo "2. \$a | \$b = $hasil"; echo "<br />";
$hasil = $a ^ $b;
echo "3. \$a ^ \$b = $hasil"; echo "<br />";
echo "4. ~\$a = ".~$a; echo "<br />";
$hasil = $a >> 1;
echo "5. \$a >> 1 = $hasil"; echo "<br />";
$hasil = $b << 2;
echo "6. \$b << 2 = $hasil"; echo "<br />";
?>
