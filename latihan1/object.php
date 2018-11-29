<?php

class Sapa{

    var $str;
}

// membuat object pesan. ini disebut instansiasi
$pesan = new Sapa();
$pesan->str="Hello World!"; //memberikan nilai utk properti str pada objek pesan
echo $pesan->str; // mencetak nilainya (pengolahan data)
?>
