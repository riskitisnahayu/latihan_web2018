<?php
function mahasiswa($nama, $kelas, $prodi="Komsi")
{
    echo "Nama: $nama, Kelas: $kelas, Prodi: $prodi <br>";
}

mahasiswa("Reza","BB","Komsi");
mahasiswa("Ana","AB");
mahasiswa("Siska","T",null);
 ?>
