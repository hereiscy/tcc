<?php
    include 'food_ordering_system.php';
    echo $id = $_GET['userID'];
    $deletequery = "DELETE FROM users where User_ID ='$id'";
    if(mysqli_query($connection, $deletequery)) {
        header('location: adminlist.php')

    }else{
        echo 'Sorry Error Occured. Please try again.';
    }
?>