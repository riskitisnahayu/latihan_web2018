<?php require "config.php";
if (isset($_GET["id"])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $id = $_GET["id"];
        $sql = "DELETE FROM user WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header('location:index.php?update=3');
        exit;
    } catch(PDOException $error) {
        echo $error->getMessage();
    }
}
