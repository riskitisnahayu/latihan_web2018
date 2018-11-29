<?php
// x pertama kali diberi nilai 2
$x = 2;
if($x >0){
 echo "Bisa dibandingkan karena tidak null";
}

// x diberi NULL
$x = null;
if($x > 0){
 echo "Tidak bisa dibandingkan karena null";
}

?>
