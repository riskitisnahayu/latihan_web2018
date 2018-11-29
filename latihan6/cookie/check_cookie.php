<?php
if (isset($_COOKIE["user"])) {
    echo "<h1>Cookie ada. Nilainya : " . $_COOKIE["user"];
} else {
    echo "<h1>Cookie TIDAK ada.</h1>";
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Klik <a href="create_cookie.php">di sini</a> untuk penciptaan Cookie</h2>
    <h2>Klik <a href="modify_cookie.php">di sini</a> untuk memodifikasi Cookie</h2>
    <h2>Klik <a href="delete_cookie.php">di sini</a> untuk penghapusan Cookie</h2>
</body>
</html>
