<?php
require "config.php";
require "templates/header.php";

session_start();

if(isset($_SESSION['login_user'])) {
	try {
	  $connection = new PDO($dsn, $username, $password, $options);

	  $sql = "SELECT * FROM user";
	  $statement = $connection->prepare($sql);
	  $statement->execute();

	  $result = $statement->fetchAll();
	} catch(PDOException $error) {
	  echo $error->getMessage();
	}
?>

<div class="row">
	<div class="span1"></div>
	<div class="span11">
		<center><h3>DATA USER</h3></center>
		<table class="table table-hover">
			<thead>
				<tr class="success">
					<th>Username</th>
					<th>Level</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result as $row) : ?>
				<tr class="success">
					<td><?php echo $row["username"]; ?></td>
		      <td><?php echo $row["level"]; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<a href="logout.php" button class="btn btn-warning" type="button">Logout</a>
	</div>
</div>

<?php
} else {
	echo "<center><h4>Anda harus login</h4><a href='index.php' button class='btn btn-warning' type='button'>Login</a></center>";
}

require "templates/footer.php";
?>
