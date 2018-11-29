<?php
require "Rectangle.php";

// Membuat beberapa object dari class Rectangle
$obj1 = new Rectangle;
$obj2 = new Rectangle;

// Memanggil method dari kedua object
echo "Luas1 = " . $obj1->getLuas() . "<br/>"; // Output: 0
echo "Luas2 = " . $obj2->getLuas() . "<br/>"; // Output: 0

// Menentukan nilai property $obj1
$obj1->panjang = 40;
$obj1->lebar = 10;

// Menentukan nilai property $obj2
$obj2->panjang = 35;
$obj2->lebar = 50;

// Memanggil method dari kedua object lagi
echo "Luas1 = " . $obj1->getLuas() . "<br/>"; // Output: 400
echo "Luas2 = " . $obj2->getLuas() . "<br/>"; // Output: 1750
?>
