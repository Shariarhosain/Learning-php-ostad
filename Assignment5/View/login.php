<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    
    <form action=" ../Controller/logincheck.php" method="post">
        <fieldset style="width:40%;">
            <legend>Login</legend>
            username: 
        <input type="text" name="username" placeholder="Username" ><br><br>
        password:
        <input type="password" name="password" placeholder="Password" >  <br><br>
        <input type="submit" value="Login" > || <a href="sigup.php">Signup</a>
        </fieldset>
    </form>
</body>
</html>