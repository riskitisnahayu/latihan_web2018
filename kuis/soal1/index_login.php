<?php require "templates/header.php"; ?>
<h2>Register user</h2>
<form method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <!-- <label for="level">Level</label>
    <input type="text" name="level" id="level" placeholder="user" value=""> -->
<br/>
<?php if (isset($message)) { ?>
    <div class="">
        <?php echo $message; ?>
    </div>
    <br>
<?php } ?>
<button class="btn btn-warning" type="submit" name="submit">Login</a></button>
<a href = "register.php" button class = "btn btn-warning" type = "button">Register</a></button>
</form>
<?php require "templates/footer.php"; ?>
