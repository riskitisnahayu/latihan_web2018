<?php
$name = "user";
$value = "Rena Swara";
setCookie($name, $value, time()+3600); /* Expire in 1 hour*/
?>

<html>
<body>
    <h1>Ini halaman modifikasi cookie</h1>
    <h2>Klik <a href="check_cookie.php">di sini</a> untuk memodifikasi cookie</h2>
</body>
</html>
