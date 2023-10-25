<?php 
session_start();
require_once "../Controller/function.php";
   $user = readFi();

if(!isset($_COOKIE['autho'])){
    header('Location: login.php');
}

?>

<html lang="en">
<head>
    <title>View All Users</title>
</head>
<body>

    <a href="adminDashboard.php">Back</a> |
    <a href="../Controller/logout.php">logout</a>

    <br><br>
   

    <table border="1">
        <tr>
         
          
            <td>EMAIL</td>
            <td>Usename</td>
            <td>Password</td>
            <td>Role</td>
            <td>Action</td>
        </tr>

<?php for($i=0; $i<count($user); $i++){?>
   
    <tr>
            
            <td><?=$user[$i]['email']?></td>
            <td><?=$user[$i]['username']?></td>
            <td><?=$user[$i]['password']?></td>
            <td><?=$user[$i]['role']?></td>
            <td>
      
            <a href="editUser.php?username=<?= $user[$i]['username']?>&email=<?= $user[$i]['email']?>&password=<?= $user[$i]['password']?>&role=<?= $user[$i]['role']?>">EDIT</a> || 
            <a href="../Controller/deleteUser.php?username=<?= $user[$i]['username']?>&email=<?= $user[$i]['email']?>&password=<?= $user[$i]['password']?>&role=<?= $user[$i]['role']?>">Delete</a>
 

               
            </td>
           
        </tr>

<?php } ?>
    </table>
</body>
</html>