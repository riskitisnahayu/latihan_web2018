<?php
session_start();
if(isset($_SESSION['sessionLogin'])) {
    session_unset();
    session_destroy();
    echo "<h1>Anda berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='set_session.php'>di sini </a> untuk LOGIN kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='check_session.php'>pemeriksaan session</a> Lagi</h2>";
}

?>
