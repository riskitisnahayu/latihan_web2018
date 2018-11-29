<?php
class Smartphone {
    protected $pemilik = "Ana";
    public function akses_pemilik() {
        return $this->pemilik;
    }

    protected function hidupkan_smartphone() {
        return "Hidupkan smartphone";
    }

    public function paksa_hidup() {
        return $this->hidupkan_smartphone();
    }
}

// Membuat object baru dari class Smartphone
$smartphone_ana = new Smartphone();

// Memanggil method akses_pemilik()
echo $smartphone_ana->akses_pemilik() . "<br/>";

// Memanggil method paksa_hidup()
echo $smartphone_ana->paksa_hidup();
?>
