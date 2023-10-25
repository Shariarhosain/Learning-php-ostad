<?php
session_start();
require_once "function.php";

   $username =$_POST ['username'];
 
    $role=$_POST ['role'];


    if(!empty($username) &&  !empty($role) && $username!="admin"){
        updateRole($username,$role);
        header('Location: ../View/rolemanagement.php');
        
    }
    else{
        header('Location: ../View/editUser.php');
    }
    
   









?>