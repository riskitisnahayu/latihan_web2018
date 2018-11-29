<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Mengecek apakah itu adalah file gambar atau bukan
if(isset($_POST["submit"])) {
 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 if($check !== false) {
 echo "File berupa gambar - " . $check["mime"] . ".";
 $uploadOk = 1;
 } else {
 echo "File ini bukan file gambar.";
 $uploadOk = 0;
 }
}

// Mengecek apakah file sudah ada di server atau belum
if (file_exists($target_file)) {
 echo "Maaf, file yang kamu pilih sudah pernah diupload.";
 $uploadOk = 0;
}
// Mengecek ukuran file yang diupload
if ($_FILES["fileToUpload"]["size"] > 500000) {
 echo "Maaf, ukuran file yang kamu pilih terlalu besar (File harus <= 500kb)";
 $uploadOk = 0;
}

// Cek ekstensi file yang diperbolehkan
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 echo "Maaf, hanya file dengan format JPG, JPEG, PNG & GIF yang
diperbolehkan.";
 $uploadOk = 0;
}

// Mengecek jika $uploadOk sama dengan 0 maka telah terjadi error
if ($uploadOk == 0) {
 echo "Maaf, file Anda gagal diupload.";
// Jika semuanya ok, akan mencoba untuk upload file
} else {
 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 echo "File ". basename( $_FILES["fileToUpload"]["name"]). " telah berhasil diupload.";
 } else {
 echo "Maaf, terjadi error saat mencoba upload file.";
 }
}
?>
