<?php
class Smartphone {
    public function __construct() {
        echo "Constructor dari class Smartphone <br />";
    }

    public function __destruct() {
        echo "Destructor dari class Smartphone <br />";
    }
}

class SmartphoneDualSim extends Smartphone {
    public function __construct() {
        parent::__construct();
        echo "Constructor dari class SmartphoneDualSim <br />";
}

public function __destruct() {
    parent::__destruct();
    echo "Destructor dari class SmartphoneDualSim <br />";
    }
}

class SmartphoneSingleSim extends SmartphoneDualSim {
    public function __construct() {
        parent::__construct();
        echo "Constructor dari class SmartphoneSingleSim <br />";
    }

    public function __destruct() {
        parent::__destruct();
        echo "Destructor dari class SmartphoneSingleSim <br />";
    }
}

$gadget_baru = new SmartphoneSingleSim();

echo "Belajar OOP PHP <br />";
?>
