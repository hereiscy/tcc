<?php
session_start();
    include "food_ordering_system.php";
    if (isset($_POST['btnlogin'])){
        $username = $_POST['txtusername'];
        $password= $_POST['txtPassword'];
        $query = "Select * from users WHERE username = '$username' and password = '$password'";
        $results = mysqli_query($connection, $query);
        if (mysqli_num_rows($results)>0){
            echo "Record Found!";
            while($row = mysqli_fetch_assoc($results)){
                $_SESSION['username'] = $row['Username'];
                $_SESSION['id'] = $row['User_ID'];
                $_SESSION['roles'] = $row['Role'];
            header("Location: session.php");
            }//main page
        } else{
            echo "<script>
            if (confirm('Incorrect username or password try again!')) {
                window.location.href = 'login.php';
            }
          </script>";
}
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comic+Sans+MS">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/webstyle.css">
    <script src="https://kit.fontawesome.com/f8c1c8b56e.js"></script>
    <style>
        .background {
            background-image: url(Images/loginbg.jpg);
            background-color: #edf5E1; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;
        }
    </style>
</head>
<?php include "header.php"?>
<div class="content">
    <div class="loginbox">
    <h1>Login Page</h1>

    <form action="#" method="post">
        <input type= "text" name= "txtusername" placeholder="Enter Username" REQUIRED>
            <i class="fa-solid fa-user"></i>
        <br>
        <input type="password" name="txtPassword" placeholder="Enter Password" REQUIRED>
            <i class="fa-solid fa-lock"></i>
            <br>     
            <a href="register.php" class="register-link">Not a member yet? Register now!</a>
        <br>
        <input type="submit" value="Login" name="btnlogin">

    </form>    
    </div>
</div>
<?php include 'footer.php'; ?>  