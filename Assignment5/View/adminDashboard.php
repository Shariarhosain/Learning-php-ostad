<?php
session_start();
if(!isset($_COOKIE['autho'])){
    header('Location: login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>This is admin Dashboard</h1>
    <a href="../Controller/logout.php"> logout</a> | 
    <a href="rolemanagement.php">Role management </a>
</body>
</html>