<?php
    $usia = array("Rona"=>"22", "Andika"=>"19", "Ria"=>"20");
    ksort($usia);

    foreach ($usia as $x => $x_value) {
        echo "Usia " . $x . " yaitu " . $x_value . " tahun.";
        echo "<br>";
    }

    /*
    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    arsort() - sort associative arrays in descending order, according to the value
    ksort() - sort associative arrays in descending order, according to the key
    */
?>
