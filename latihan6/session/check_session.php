<?php
session_start();
if (isset($_SESSION['sessionLogin'])) {
    echo "<h1>Selamat datang " . $_SESSION['sessionLogin'] . "</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah login</h2>";
    echo "<h2>Klik <a href='delete_session.php'>di sini </a>untuk logout</h2>";
}else {
    echo "<h2>Anda belum login !!!, Anda tidak berhak masuk ke halaman ini.</h2>";
    echo "<h2>Silahkan login <a href='set_session.php'>di sini </a></h2>";
}
?>
