<link rel="stylesheet" href="/bootstrap.min.css">
<?php require "config.php";
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $sql = "SELECT * FROM user";
        $statement = $connection->prepare($sql);
        $statement->execute();

        //fetchAll() - mengembalikan array yang berisi semua baris pada kumpulan hasil
        $rowult = $statement->fetchAll();

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
<div class="container">

    <table class = "table table-hover">
        <thead style="background-color:black;">
            <tr class = "success">
                <th>#</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>

    <tbody>
        <?php
            $limit = 10; // jumlah data per halamannya
            $query = "SELECT * FROM user";

            $s = $connection->prepare($query);
            $s->execute();
            $total_results = $s->rowCount();
            $total_pages = ceil($total_results/$limit);

            if (!isset($_GET['page'])) {
                $page = 1;
            } else{
                $page = $_GET['page'];
            }

            // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
            $starting_limit = ($page-1)*$limit;

             // Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
            $show  = "SELECT * FROM user ORDER BY id ASC LIMIT $starting_limit, $limit";

            $r = $connection->prepare($show);
            $r->execute();

            while($row = $r->fetch(PDO::FETCH_ASSOC)):
        ?>

        <tr class = "success">
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td><?php echo $row["level"]; ?></td>
            <td>
            <a href="update.php?id=<?php echo $row["id"]; ?>">Edit</a>
            |
            <a href="delete.php?id=<?php echo $row["id"];?>" class = "delete" onclick="return confirm('Are you sure to delete <?php echo $row["username"];?>?');">Delete</a>
            </td>
        </tr>
        <?php
        endwhile;
        ?>
        <!--  -->
    </tbody>
</table>

<ul class="pagination">
    <ul class="row">
        <li>
            <?php for ($page=1; $page <= $total_pages ; $page++): ?>
            <a href='<?php echo "?page=$page"; ?>' class="links"><?php  echo $page; ?></a>
        </li>
        <li><?php endfor; ?></li>
    </ul>
</ul>
    <br>
    <a href = "create.php" button class = "btn btn-warning" type = "button">Create User</a></button>
</div>
<?php require "templates/footer.php"; ?>
