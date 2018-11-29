<?php
class Rectangle
{

// Mendeklarasikan property
public $panjang = 0;
public $lebar = 0;

// Method untuk memperoleh keliling
public function getKeliling(){
    return (2 * ($this->panjang + $this->lebar));
}

// Method untuk memperoleh luas
public function getLuas(){
    return ($this->panjang * $this->lebar);

}

}
?>
