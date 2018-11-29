<?php

    $pendapatan = 12000;
    $pendapatanBersih = 0;
    $tax=0;
    $status = "single";

    if ($status == "single") {
        if($pendapatan >= 0 && $pendapatan <=32000){
            $tax = $pendapatan * 10/100;
            $pendapatanBersih = $pendapatan - $tax;
            echo "Pendapatan Bersih : $pendapatanBersih <br>";
            echo "Pajak : $tax ";
        } elseif ($pendapatan >=32000) {
            $tax = $pendapatan * 25/100 + 3200 ;
            $pendapatanBersih = $pendapatan - $tax;
            echo "Pendapatan Bersih : $pendapatanBersih <br>";
            echo "Pajak : $tax ";
        } else {
            echo "Penghasilan Tidak ada!";
        }
    }elseif($status == "married"){
        if ($pendapatan >= 0 && $pendapatan <= 64000){
            $tax = $pendapatan * 10/100;
            $pendapatanBersih = $pendapatan - $tax;
            echo "Pendapatan Bersih : $pendapatanBersih <br>";
            echo "Pajak : $tax ";
        }elseif ($pendapatan >= 64000){
            $tax = $pendapatan *  25/100 + 6400 ;
            $pendapatanBersih = $pendapatan - $tax;
            echo "Pendapatan Bersih : $pendapatanBersih <br>";
            echo "Pajak : $tax ";
        }else {
            echo "Penghasilan tidak ada!";
        }
    }else{
        echo "Status tidak ada!";
    }

?>
