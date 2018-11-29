<?php
// set the expiration date to one hour ago
setCookie("user", "", time() - 3600); /* Expire in 1 hour*/
?>

<html>
<body>
    <h1>Cookie berhasil dihapus.</h1>
    <h2>Klik <a href="create_cookie.php">di sini</a> untuk penciptaan cookie</h2>
    <h2>Klik <a href="check_cookie.php">di sini</a> untuk pemeriksaan cookie</h2>
    <h2>Klik <a href="modify_cookie.php">di sini</a> untuk memodifikasi cookie</h2>
</body>
</html>
