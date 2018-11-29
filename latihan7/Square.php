<?php
require "Rectangle.php";

//si square merupakan kelas turunan dari class Rectangle (class induk)
// Mendefinisikan class baru berdasarkan class yang sudah ada
class Square extends Rectangle
{
    // Method untuk menguji apakah persegi panjang juga persegi
    public function isSquare(){
        if($this->panjang == $this->lebar){
            return true; // Persegi
        } else{
            return false; // Bukan persegi
        }
    }
}

// Membuat object baru dari class Square
$obj = new Square;

// Menentukan nilai property object
$obj->panjang = 20;
$obj->lebar = 20;

// Memanggil method object
if($obj->isSquare()){
    echo "Luas persegi adalah ";
} else{
    echo "Luas persegi panjang adalah ";
};

echo $obj->getLuas();
?>
