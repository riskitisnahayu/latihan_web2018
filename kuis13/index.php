<?php require "config.php";

if (isset($_POST['login'])) {

  try {
		session_start();
		$connection = new PDO($dsn, $username, $password, $options);

		// username dan password yang dikirim dari form login
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		// Untuk melindungi MySQL injection (http://us.php.net/mysql_real_escape_string)
		$username = trim($username);
		$password = trim($password);
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = htmlspecialchars($username);
		$password = htmlspecialchars($password);

		$sql = 'SELECT * from user where username = :username and password = :password';
		$statement = $connection->prepare($sql);
		$statement->execute(array(':username' => $username, 'password' => $password));

		$row = $statement->fetch(PDO::FETCH_ASSOC);

		if (empty($row['username'])) {
			echo "<p><center>Login gagal! username tidak terdaftar atau password salah</center></p>";
			include('index.php');
		} else {
			// set variabel session
			$_SESSION['login_user'] = $username;

			if ($row['level'] == 'admin') {
				header('location:data_user.php');
			} else {
				header('location:data_buku.php');
			}
		}
	} catch(PDOException $error) {
			echo $error->getMessage();
	}
}
?>

<?php require "templates/header.php";

if (!empty($_GET['register'])){
	if ($_GET['register']==1)
		echo "<p class='message'><center>Registrasi berhasil. Silahkan login.</center></p>";
}
?>

<center><h3>Login</h3></center>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
	<tr>
		<td>
			<form method="post">
				<table width="100%" border="0" cellpadding="3" cellspacing="1">
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input name="username" type="text" id="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input name="password" type="password" id="password"></td>
					</tr>
					<tr>
						<td colspan=3 align="center"><button class="btn btn-warning" input type="submit" name="login">Login</button><a href="register.php"> Buat Akun </a></td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>

<?php require "templates/footer.php"; ?>
