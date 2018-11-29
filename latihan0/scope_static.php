<?php
function myTest1()
{
    static $x = 0; //use the static keyword when you first declare the variable
    echo $x;
    $x++;
}
myTest1();
echo "<br>";
myTest1();
echo "<br>";
myTest1();
?>
