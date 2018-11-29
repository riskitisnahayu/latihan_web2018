<?php require "config.php";
$message = null;
    if (isset($_POST['submit'])) {
        try {
            $connection = new PDO($dsn, $username, $password, $options);
            $check_username = array(
                "username" => $_POST['username']
            );
            $new_user = array(
                "username" => $_POST['username'],
                "password" => $_POST['password'],
                // "level" => $_POST['level']
            );
            $check = "SELECT * FROM user WHERE username = :username";
            $statement = $connection->prepare($check);
            $statement->bindValue( ":username", $new_user['username'], PDO::PARAM_STR);
            $result_check = null;
            $statement->execute($check_username);
            $result_check = $statement->fetchAll();

            if (count($result_check) == 0) {
                $sql = "INSERT INTO user (username, password) VALUES (:username, :password)";
                $statement = $connection->prepare($sql);
                $statement->execute($new_user);

                header('location:index.php?update=2');
            }else{
                $message = "Username already exists";

            }



            } catch(PDOException $error) {
                echo $error->getMessage();
            }
    }
?>


<h2>Register user</h2>
<form method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Password</label>
    <input type="text" name="password" id="password" required>

    <!-- <label for="level">Level</label>
    <input type="text" name="level" id="level" placeholder="user" value=""> -->
<br/>
<?php if (isset($message)) { ?>
    <div class="">
        <?php echo $message; ?>
    </div>
    <br>
<?php } ?>
<button class="btn btn-warning" type="submit" name="submit">Register</a></button>

<a href="index.php" button class="btn btn-warning" type="button">Batal</a></button>

</form>
