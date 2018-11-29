<?php require "config.php";

if (isset($_POST['register'])) {

  try {
    $connection = new PDO($dsn, $username, $password, $options);

		$new_user = array(
      "username" => $_POST['username'],
      "password"  => md5($_POST['password'])
    );

		if (empty($_POST['username']) || empty($_POST['password'])){
			echo '<script>alert("Semua data harus diisi"); window.location = "register.php";</script>';
		} else {
			$check = $connection->prepare("SELECT username from user where username = :username");
			$check->bindValue(':username', $_POST['username']);
			$check->execute();

			if ($check->rowCount() > 0) {
				echo '<script>alert("Sudah ada user dengan username tersebut"); window.location = "register.php";</script>';
			} else {
				$sql = 'INSERT INTO user (username, password, level) VALUES (:username, :password, "user")';
				$statement = $connection->prepare($sql);
			  $statement->execute($new_user);
				header('location:index.php?register=1');
			}
		}
	} catch(PDOException $error) {
			echo $error->getMessage();
	}
}
?>

<?php require "templates/header.php"; ?>

<center><h3>Registrasi</h3></center>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
	<tr>
		<td>
			<form method="post">
				<table width="100%" border="0" cellpadding="3" cellspacing="1">
					<tr>
						<td>Masukkan Username</td>
						<td>:</td>
						<td><input name="username" type="text" id="username"></td>
					</tr>
					<tr>
						<td>Masukkan Password</td>
						<td>:</td>
						<td><input name="password" type="password" id="password"></td>
					</tr>
					<tr>
						<td colspan=3 align="center">
							<button class="btn btn-warning" input type="submit" name="register">Register</button>
							<a href="index.php" button class="btn btn-warning">Batal</button>
						</td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>

<?php require "templates/footer.php"; ?>
