<?php
session_start();
    if (isset($_SESSION['roles'])) {
        if ($_SESSION['roles'] == 'Admin') { 
            header("Location: Adminmain.php"); 
            exit();
        } elseif ($_SESSION['roles'] == 'Cust') {
            header("Location: Custmain.php");
            exit();
        } else {
            header("Location: Mainpage.php");
        }
    } 
?> 