<?php
session_start();
require_once "function.php";
  
$username =$_GET['username'];
if(!empty($username)){
deleteByUsername($username);
header('Location: ../View/rolemanagement.php');
}
else{
    header('Location: ../View/rolemanagement.php');
}
?>