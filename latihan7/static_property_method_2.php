<?php
class Smartphone {
    public $merk;
    public $pemilik;

    // static property
    public static $harga_beli;

    // static method
    public static function beli_smartphone() {
        return "Beli smartphone seharga Rp" . self::$harga_beli;
    }
}

// Menentukan nilai static property
Smartphone::$harga_beli=3000000;

// Memanggil static method
echo Smartphone::beli_smartphone();
?>
