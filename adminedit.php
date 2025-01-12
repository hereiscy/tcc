<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Edit</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comic+Sans+MS">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/webstyle.css">
    <script src="https://kit.fontawesome.com/f8c1c8b56e.js"></script>
    <style>
        .background {
            background-image: url(Images/adminlistbg.avif);
            background-color: #edf5E1; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;
        }
    </style>
</head>
<?php include 'header.php';
include 'food_ordering_system.php';
$id = $_GET['userID'];
$query = "SELECT * FROM Users where User_ID = '$id'" ;
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result)>0){
    ?>
<?php
    while($row = mysqli_fetch_assoc($result)){
        ?>
<div class="content">
<div class="adminedit">
    <h1>Edit User</h1>
<form method="post">
<table>
    <tr>
        <td class='tblhead'>User_ID</td>
        <td class='tblval'><?php echo $row['User_ID'];?></td>
    </tr>    

    <tr>
        <td class='tblhead'>Username</td>
        <td class='tblval'>
            <input type ="text" name="txtUsername" value="<?php echo $row['Username'];?>">
        </td class='tblval'>
    </tr>
    <tr>
        <td class='tblhead'>Password</td>
        <td class='tblval'>
            <input type="text" name="txtPassword" value="<?php echo $row['Password'];?>">
        </td>
    </tr>
    <tr>
    <td class='tblhead'>Role</td>
        <td class='tblval'>
            <?php if($row['Role'] == 'Cust'){
            ?>
                <input type="radio" name="Role" value = "Cust" checked> Customer
                <input type="radio" name="Role" value = "Admin" > Admin
            <?php
            }   else{?>
            <input type="radio" name="Role" value = "Cust"> Customer
            <input type="radio" name="Role" value = "Admin" checked> Admin
        </td>
    </tr>  
    <?php }?>


        <td></td>
        <td>
            <input class="admineditbtn" type ="submit" name="btnUpdate" value="Update">
        </td>
    </tr>  
</table>
</form>
<?php
    }}
     else{
        echo 'no records found';
}
if(isset($_POST['btnUpdate'])) {
    $uname = $_POST['txtUsername'];
    $pass = $_POST['txtPassword'];
    $role = $_POST['Role'];
    $address = $_POST['txtAddress'];

    $updatequery = "UPDATE users SET Username = '$uname', Password = '$pass', Role = '$role', Address = '$address' WHERE  User_ID ='$id'";

    if(mysqli_query($connection, $updatequery)) {
        echo "<script>
        if (confirm('Record Successfully Updated!')) {
            window.location.href = 'adminlist.php';
        }
      </script>";
    }else{
        echo 'Sorry Error Occured. Please try again.';
    }
}
mysqli_close($connection);
?>
</div>
</div>
<?php include 'footer.php';
?>