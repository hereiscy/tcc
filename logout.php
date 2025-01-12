<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['id']);
    unset($_SESSION['roles']);
    session_destroy();
    header('Location: Mainpage.php');
?>