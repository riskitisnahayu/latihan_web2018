<?php
session_start();
if(isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user == 'riski' && $pass == '123'){
        $_SESSION['sessionLogin'] = $user; // set variabel session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='check_session.php'> disini</a> untuk menuju ke halaman pemeriksaan session";
    }else {
        header("Location : " . $_SERVER['PHP_SELF']);
    }
}else {
?>

<html>
<body>
    <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h3>Login</h3>
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="Login" value="Log In"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
}
?>
