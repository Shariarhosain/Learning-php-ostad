<?php

session_start();
if(!isset($_COOKIE['autho'])){
    header('Location: ../View/login.php');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <h1>Welcome buddy</h1>
    <a href="Controller/logout.php">Logout</a>
</body>
</html>