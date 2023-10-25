<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
  

    <?php
    // Check if user data is provided in the query string
    if (isset($_GET['username']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['role'])) {
        // Retrieve user data from the query string
        $username = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $role = $_GET['role'];

        // Display a form with user data pre-filled
        ?>
        <form action="../Controller/editusercheck.php" method="post">

        <fieldset style="width:40%;">
       <legend>User Edit page</legend>
       
            username:
            <input type="text" name="username" value="<?= $username ?>"><br><br>
            email:
            <input type="text" name="email" value="<?= $email ?>"><br><br>
            Role:
            <input type="radio" name="role" value="<?= $role ?>" <?php if($role=="none"){echo "checked"; }?>> none
            <input type="radio" name="role" value="user"<?php if($role=="user"){echo "checked"; }?>> user
            <input type="radio" name="role" value="manager"<?php if($role=="manager"){echo "checked"; }?>> manager <br><br>
            <input type="submit" value="Update User">
            </fieldset>
        </form>
        <?php
    }?>
</body>
</html>
