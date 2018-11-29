<?php
     $con=mysqli_connect("localhost","root","","db");
     //fungsi mysqli_connect akan mengembalikan tipe data resouce,
     //yang akan disimpan ke dalam variabel $con
?>

<?php
// Membaca file diary
$bacafile = fopen("diary.txt", "r");

?>
