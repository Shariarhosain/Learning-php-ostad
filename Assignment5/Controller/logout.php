<?php

session_start();
setcookie('autho', true, time() - 20, '/');
header('Location: ../View/login.php');
?>