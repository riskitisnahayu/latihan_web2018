<?php
    // menggunakan if-elseif-elseif

    $i = 1;

    if($i%3 == 0 && $i%5== 0){
        echo "Web Keren";
    } elseif ($i%3 == 0) {
        echo "Web";
    } elseif ($i%5 == 0){
        echo "Keren";
    } else {
        echo "Coba lagi!";
    }

        echo "<br>";
    // menggunakan switch
    $var = 1;

    switch ($var) {
        case $var%3 == 0 && $var%5== 0:
            echo "Web Keren";
            break;
        case $var%3 == 0:
            echo "Web";
            break;
        case $var%5== 0:
            echo "Keren";
            break;

        default:
            echo "Coba lagi!";
            break;
    }
?>
