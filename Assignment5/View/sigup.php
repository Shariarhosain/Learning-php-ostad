<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    


    
    <form action=" ../controller/signupcheck.php" method="post">
    
     
      <fieldset style="width:40%;">
        <legend>Sign Up</legend>
        username: 
        <input type="text" name="username" placeholder="Username" ><br><br>
        email:
        <input type="text" name="email" placeholder="Email" ><br><br>
        password:
        <input type="password" name="password" placeholder="Password" ><br><br>
        <input type="submit" value="Sign up"> ||  <a href="login.php">Login</a>
      </fieldset>
        
    </form>
</body>
</html>