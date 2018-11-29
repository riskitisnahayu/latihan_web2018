<?php require "config.php";


if (isset($_GET['id'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $error) {
        echo $error->getMessage();
    }
} else {
    echo "Something went wrong!";
    exit;
}
?>

<?php require "templates/header.php"; ?>
<?php
if (isset($_POST['submit'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $user =[
            "id" => $_POST['id'],
            "username" => $_POST['username'],
            "password" => $_POST['password'],
            "level" => $_POST['level']
        ];
        $sql = "UPDATE user SET
            id = :id,
            username = :username,
            password = :password,
            level = :level
            WHERE id = :id";
            $statement = $connection->prepare($sql);
            $statement->execute($user);

        header('location:index.php?update=1');
        } catch(PDOException $error) {
        //    echo $error->getMessage();
            echo "<p><blockquote>Sorry, username already exists.</blockquote></p>";
        }

}
 ?>
<h2>Edit a user</h2>
<form method="post">
    <?php foreach ($user as $key => $value) : ?>
        <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
        <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo $value; ?>" <?php echo ($key === 'id' || $key === 'level'? 'readonly' : null); ?> required>

    <?php endforeach; ?>

<br/>

<button class="btn btn-warning" type="submit" name="submit">Submit</a></button>
<a href="index.php" button class="btn btn-warning" type="button">Cancel</a></button>

</form>
<?php require "templates/footer.php"; ?>
