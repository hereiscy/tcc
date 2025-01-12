<?php
    include "food_ordering_system.php";
    if(isset($_POST['btnRegister'])){
        $username = $_POST['txtusername']; 
        $password = $_POST['txtPassword'];
        

        $query = "SELECT * FROM `users` WHERE `Username` = '$username'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result)>0){
            echo "<script>alert('Username already exists!');</script>";
                }
        else{
            $query = "INSERT INTO `users` (`Username`, `Password`, `Role`) VALUES ('$username', '$password','Cust')"; 

            if(mysqli_query($connection, $query)){
                echo "<script>
                if (confirm('You have been registered!')) {
                    window.location.href = 'login.php';
                }
              </script>";
            }else{
                echo "An error has occurred: " . mysqli_error($connection); // Added error message
            }
            mysqli_close($connection);
            header('Location: login.php');
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
            background-image: url(Images/registerbg.avif);
            background-color: #edf5E1; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;
        }
    </style>
</head>
<?php include 'header.php';?>
<script>
    function validateForm() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;

        if (password !== confirmPassword) {
            alert("Password doesn't match!");
            return false;
        }

        return true;
    }
</script>
<div class="content">
    <div class="registerbox">
        <h1>Registration Page</h1>
        <form action="" method="post" onsubmit="return validateForm()">
            <input type= "text" name= "txtusername" placeholder="Enter Username" REQUIRED>
            <i class="fa-solid fa-user"></i>
            <br>
            <input type="password" name="txtPassword" id="txtPassword" placeholder="Enter Password" REQUIRED>
            <i class="fa-solid fa-lock"></i>
            <br>
            <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" placeholder="Confirm Password" required>
            <i class="fa-solid fa-lock"></i>
            <br>
            <a href="login.php" class="register-link">Already a member? Login now!</a>
            <input type = "submit" value="Register" name="btnRegister">
        </form> 
    </div>
</div>
<br>
<?php include 'footer.php'; ?>