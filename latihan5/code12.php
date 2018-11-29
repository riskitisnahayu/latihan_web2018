<!-- LOOPING DAN ASSOSIATIVE ARRAY -->

<?php
    $usia = array("Rona"=>"22", "Andika"=>"19", "Ria"=>"20");

    foreach ($usia as $x => $x_value) {
        echo "Usia " . $x . " yaitu " . $x_value . " tahun.";
        echo "<br>";
    }
?>
