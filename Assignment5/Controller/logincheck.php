<?php

session_start();
require_once "function.php";
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username=="admin" && $password=="admin")
{
    setcookie('autho', true, time() + 60, '/');
    header('Location: ../View/adminDashboard.php');
}else{
    
if(!empty($username) && !empty($password)){
    $data=readFi();
foreach ($data as $key => $value) {
    if ($value['username'] === $username && $value['password'] === $password &&  $value['role'] === "user") {
        setcookie('autho', true, time() + 60,'/');
        header('Location: ../View/userDash.php');
        break;
    } else  if ($value['username'] === $username && $value['password'] === $password &&  $value['role'] === "manager") {
        setcookie('autho', true, time() + 60, '/');
        header('Location: ../View/managerDash.php');
        break;
    }
    else{
        header('Location: ../View/login.php');
  
    }
 
}
}
else{
    header('Location: ../View/login.php');
}
}




?>