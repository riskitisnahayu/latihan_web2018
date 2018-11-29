<?php require "config.php";
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $sql = "SELECT * FROM user";
        $statement = $connection->prepare($sql);
        $statement->execute();

        //fetchAll() - mengembalikan array yang berisi semua baris pada kumpulan hasil
        $result = $statement->fetchAll();

    } catch(PDOException $error) {
        echo $error->getMessage();
    }
?>

<?php require "templates/header.php";
    if (!empty($_GET['update'])){
        if ($_GET['update'] == 1) {
            echo "<p><blockquote>User successfully updated</blockquote></p>";
        } else if ($_GET['update'] == 2) {
            echo "<p><blockquote>User successfully added</blockquote></p>";
        } else if ($_GET['update'] == 3) {
            echo "<p><blockquote>User successfully deleted</blockquote></p>";
        }
    }
?>

<h3>Manage Users</h3>
<table class = "table table-hover">
    <thead>
        <tr class = "success">
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
        </tr>
    </thead>

<tbody>
    <?php foreach ($result as $row) : ?>
    <tr class = "success">
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["password"]; ?></td>
        <td>
            <option selected>User</option>
        </td>
    </tr>

    <?php endforeach; ?>


    <!--  -->
</tbody>
</table>
<br>
    <a href = "register.php" button class = "btn btn-warning" type = "button">Register</a></button>

    <?php require "templates/footer.php"; ?>
