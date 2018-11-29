<?php
class Smartphone {
    public function __construct() {
        echo "Constructor dari class smartphone <br />";
    }

    public function __destruct() {
        echo "Destructor dari class smartphone <br />";
    }
}

class SmartphoneDualSim extends Smartphone {

}

class SmartphoneSingleSim extends SmartphoneDualSim {
    
}

$gadget_baru = new SmartphoneSingleSim();

echo "Belajar OOP PHP <br />";
?>
