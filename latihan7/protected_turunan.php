<?php
class Smartphone {
    protected $pembuat = "China";
}

class Tablet extends Smartphone {
    public function tampilkan_pembuat() {
        return $this->pembuat;
    }
}

// Membuat object baru dari class Tablet
$tablet_baru = new Tablet();

// Memanggil method object
echo $tablet_baru->tampilkan_pembuat();
?>
