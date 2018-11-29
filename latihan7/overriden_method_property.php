<?php
class Smartphone {
    public static $brand = "Samsung";
    public function lihat_spec() {
        return "Spec smartphone: " . self::$brand . ", Processor Snapdragon, Ram 1GB";
    }
}

class SmartphoneDualSim extends Smartphone {
    public static $brand = "Asus";
    public function lihat_spec() {
        return "Spec smartphone dual sim:" . self::$brand . ", Processor Snapdragon, Ram 2GB";
    }

    public function lihat_spec_smartphone() {
        return parent::lihat_spec();
    }

    public function lihat_brand_smartphone() {
        return parent::$brand;
    }
}

$gadget_baru = new SmartphoneDualSim();

echo $gadget_baru->lihat_spec();
echo "<br />";
echo $gadget_baru->lihat_spec_smartphone();
echo "<br />";
echo $gadget_baru->lihat_brand_smartphone();
?>
