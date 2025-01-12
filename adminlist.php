<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
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
if(isset($_POST['btnsearch'])) {
    $key = $_POST['keyword'];
    $query = "SELECT * FROM users WHERE User_ID LIKE '%$key%' OR Username LIKE '%$key%'";
    $results = mysqli_query($connection, $query);
}
else {
    $query = "SELECT * FROM users";
    $results = mysqli_query($connection, $query);
}
if(mysqli_num_rows($results)>0){?>
<div class="content">
<div class="adminlist">
    <h1>User List</h1>
    <form action="#" method="post" class='search'>
        <input type="text" name="keyword" placeholder="Search by User ID or Username">
        <button type="submit" name="btnsearch">Search <i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <table border = "1">
        <tr>
            <th>User_ID</th>
            <th>Username</th>
            <th>Role</th>
            <th colspan = "2">Action</th>
    </tr>
<?php
    while($row = mysqli_fetch_assoc($results)){
        echo "<tr>";
        echo '<td>' . $row['User_ID'] . '';
        echo '<td>' . $row['Username'] . '';
        echo '<td>' . $row['Role'] . '';

        ?>
            <td><a class="btndelete"href="admindelete.php?userID=<?php echo $row['User_ID'];?>">Delete <i class="fa-solid fa-trash"></i></a></td>
    <?php
        echo '</tr>';
    }
    } else{
        echo 'no records found';
}
?>
</table>
</div>
</div>
<?php include 'footer.php';?>
