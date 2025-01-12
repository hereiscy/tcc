<?php
session_start();
include 'food_ordering_system.php';

if (isset($_POST['add'])) {
    if (isset($_SESSION['id'], $_SESSION['roles']) && ($_SESSION['roles'] == 'Cust' || $_SESSION['roles'] == 'Admin')) {
        $foodid = $_GET['id'];
        $foodname = $_POST['hidden_name'];
        $foodimg = $_POST['hidden_image'];
        $foodprice = $_POST['hidden_price'];
        $foodquantity = $_POST['quantity'];
        $uid = $_SESSION['id'];
        $sql = "INSERT INTO `cart`(`food_ID`, `Name`, `Image`, `Price`, `Quantity`, `User_ID`) VALUES ('$foodid', '$foodname', '$foodimg', '$foodprice', '$foodquantity', '$uid')";
        mysqli_query($connection, $sql);
    } else {
        echo "<script>
                if (confirm('Please log in to add items to your cart.')) {
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
    <title>Menu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comic+Sans+MS">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/webstyle.css">
    <script src="https://kit.fontawesome.com/f8c1c8b56e.js"></script>
    <style>
        .background {
            background-image: url(Images/menubg.jpg);
            background-color: #edf5E1; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;
        }
    </style>
</head>
<?php include 'header.php';?>
<div class="content">
    <form id="filterForm" action="menu.php" method="post">
        <label for="category">Filter by Category:</label>
        <select name="category" id="category" onchange="document.getElementById('filterForm').submit()">
            <option value="all" <?php if(isset($_POST['category']) && $_POST['category'] == 'all') echo 'selected'; ?>>All Categories</option>
            <option value="Western" <?php if(isset($_POST['category']) && $_POST['category'] == 'Western') echo 'selected'; ?>>Western</option>
            <option value="Local" <?php if(isset($_POST['category']) && $_POST['category'] == 'Local') echo 'selected'; ?>>Local</option>
            <option value="Sides" <?php if(isset($_POST['category']) && $_POST['category'] == 'Sides') echo 'selected'; ?>>Sides</option>
            <option value="Beverages" <?php if(isset($_POST['category']) && $_POST['category'] == 'Beverages') echo 'selected'; ?>>Beverages</option>
        </select>
    </form>
    <h2 class="cataloghead">Menu</h2>
    <div class="totalwrapper">
            <?php
            $query = 'SELECT * FROM `foods` ORDER BY food_ID ASC';

            if (isset($_POST['category'])) {
                $selectedCategory = $_POST['category'];
                if ($selectedCategory != 'all') {
                    $query = "SELECT * FROM `foods` WHERE Category = '$selectedCategory' ORDER BY Food_Id ASC";
                }
            }

            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
						<form action="menu.php?action=add&id=<?php echo $row['Food_Id'];?>" method="post">
                          <div class="catalog">
                                <img src="Images/<?php echo $row['Image'];?>" alt="foodimg">
                               <h3><?php echo $row['Name'];?></h3>
                                <p><?php echo $row['Description'];?></p>
                                <p><?php echo $row['Category'];?></p>
                                <p>RM <?php echo $row['Price'];?></p>
                                <p>Quantity: <input type="text" id="quantity" name="quantity" value="1" class="quantitybox"></p>
                                <input type="hidden" name="hidden_image" value="<?php echo $row['Image'];?>">
                                <input type="hidden" name="hidden_name" value="<?php echo $row['Name'];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row['Price'];?>">
                                <button type="submit" name="add">Add To Cart</button>
                            </div>
                        </form>
                    <?php
                    }
                }
?>
        </div>
        </div>
    </div>
<?php include 'footer.php';?>