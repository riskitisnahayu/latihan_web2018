<?php
class Smartphone {
    public function lihat_spec() {
        return "Spec smartphone: Samsung, Processor Snapdragon, Ram 1GB";
    }
}

class SmartphoneDualSim extends Smartphone {
    public function lihat_spec() {
        return "Spec smartphone dual sim: Asus, Processor Snapdragon, Ram 2GB";
    }

    public function lihat_spec_smartphone() {
        return parent::lihat_spec();
    }
}

$gadget_baru = new SmartphoneDualSim();

echo $gadget_baru->lihat_spec() . "<br/>";
echo $gadget_baru->lihat_spec_smartphone();
?>
