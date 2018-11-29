<?php

    function name($fname, $lname)
    {
        $fname = "Ahmad";
        $name = $fname . $lname;
        return $name . "<br>";
    }

    echo "Berikut ini nama mahasiswa yang mempunyai nama depan Ahmad: <br/>";
    echo name("", " Zakaria");
    echo name("", " Latif");
    echo name("", " Fadillah");
 ?>
