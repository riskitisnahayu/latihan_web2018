<?php
    $mahasiswa = array("Rona", "Andika", "Ria");
    sort($mahasiswa);

    $arrlength = count($mahasiswa);
    for ($x=0; $x < $arrlength; $x++) {
        echo $mahasiswa[$x];
        echo "<br>";
    }

    /*
    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    */
?>
