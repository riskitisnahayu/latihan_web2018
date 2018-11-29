<?php
class Smartphone {
    protected $brand = "Samsung"; // bisa public bisa protected -- private hanya bida diakses oleh class itu sendiri
    private $pembuat = "China" . " ";

    public function tampilkan_pembuat() {
        return $this->pembuat;
    }
}

class Tablet extends Smartphone {
    public function tampilkan_brand() {
        return $this->brand;
    }
}

// Membuat object baru dari class

$smartphone_baru = new Smartphone();

// Memanggil method object
echo $smartphone_baru->tampilkan_pembuat();

// Membuat object baru dari class Table
$tablet_baru = new Tablet();

// Memanggil method object
echo $tablet_baru->tampilkan_brand();
?>
