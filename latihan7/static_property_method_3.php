<?php
class Smartphone {
    protected static function beli_smartphone(){
        return "Beli smartphone baru";
    }
}

class SmartphoneDualSim extends Smartphone{
    private static function beli_smartphone_dualsim(){
        return "Beli smartphone dual sim baru";
}

public static function beli_semua(){
    echo parent::beli_smartphone() . "<br />";
    echo self::beli_smartphone_dualsim();
    }
}

SmartphoneDualSim::beli_semua();
?>
