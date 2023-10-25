<?php

session_start();
require_once "function.php";
if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $role="none";

    $user = array(
    'email' => $email,
    'username' => $username, 
    'password' => $password, 
    'role' => $role);
    $data=readFi();
     $flag=false;

    foreach ($data as $key => $value) {
        if ($value['username'] === $username ) {
            $flag=true;
            break;
        }
    }
    
    if ($flag != true && $username != "admin") {
    
        writeFi($user);
        header('Location: ../View/login.php');
    }
    else 
    {
        header('Location: ../View/sigup.php');
    }
    
   

} 
else 
{
    header('Location: ../View/login.php');
}





?>