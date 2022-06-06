<?php 
    session_start();
    unset($_SESSION['timeout']);
    unset($_SESSION['password']);
    unset($_SESSION['username']);
    $_SESSION['valid'] = false;
    header('Refresh: 0; url = ../index.php')
?>