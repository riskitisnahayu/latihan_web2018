<?php
// Memasukkan definisi class
require "Rectangle.php";

// Membuat object baru dari class Rectangle
$obj = new Rectangle;

// Mendapatkan nilai property object
echo "p = " . $obj->panjang . "<br/>"; // 0utput: 0
echo "l = " . $obj->lebar . "<br/>"; // 0utput: 0

// Menentukan nilai property object
$obj->panjang = 40;
$obj->lebar = 10;

// Membaca nilai property object lagi untuk menampilkan perubahan
echo "p = " . $obj->panjang . "<br/>"; // 0utput: 40
echo "l = " . $obj->lebar . "<br/>"; // 0utput: 10

// Memanggil method object
echo "Keliling = " . $obj->getKeliling() . "<br/>"; // 0utput: 100
echo "Luas = " . $obj->getLuas() . "<br/>"; // Output: 400
?>
