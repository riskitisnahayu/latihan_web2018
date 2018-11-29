<?php
class Smartphone {
    public $brand;
    public $pemilik;

// static property
public static $harga_beli;

// static method
public static function beli_smartphone() {
    return "Beli smartphone";
    }
}

// Menentukan nilai static property --- untuk mengeset nilai properti
Smartphone::$harga_beli=3000000;

// Mendapatkan nilai static property
echo "Harga beli : Rp" . Smartphone::

$harga_beli . "<br />";

// Memanggil static method
echo Smartphone::beli_smartphone();
?>
