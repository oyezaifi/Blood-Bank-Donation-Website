<?php

// Distroy Session
session_start();
unset($_SESSION['login']);
unset($_SESSION['loggedin']);
session_destroy();

// Deleting Cookies
if (isset($_COOKIE['user'])) {
    unset($_COOKIE['user']);
    setcookie('user', '', time() - 86400, '/');
}

header("location:login.php"); 
?>
