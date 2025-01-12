<?php
session_start();
include 'food_ordering_system.php';
$uid = $_SESSION['id'];
if(isset($_GET["action"]) && $_GET["action"] == "delete"){
    $id = $_GET["orderid"];
    $deleteQuery = "DELETE FROM `cart` WHERE Order_ID = '$id'";
    mysqli_query($connection, $deleteQuery);
}
if (isset($_POST["btnpayment"])) {
    $clearCartQuery = "DELETE FROM `cart` where User_ID = '$uid'";
    mysqli_query($connection, $clearCartQuery);
    echo "<script>
                if (confirm('Payment Success!')) {
                    window.location.href = 'menu.php';
                }
              </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comic+Sans+MS">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/webstyle.css">
    <script src="https://kit.fontawesome.com/f8c1c8b56e.js"></script>
</head>
<?php include 'header.php';?>
<div class="content">
    <div class="cart">
    <h3>Cart</h3>
    <form action="#" method="post">
        <table>
            <tr>
                <th>Food Image</th>
                <th>Food Name</th>
                <th>Food Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Remove Item</th>
            </tr>
            <?php
            $query = "SELECT * FROM `cart` where User_ID = '$uid' ORDER BY Order_ID ASC";
            $result = mysqli_query($connection, $query);
            $total = 0;
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><img src="Images/<?php echo $row["Image"];?>" alt=""></td>
                        <td><?php echo $row["Name"];?></td>
                        <td>RM <?php echo $row["Price"];?></td>
                        <td><?php echo $row["Quantity"];?></td>
                        <td>RM <?php echo number_format($row["Quantity"]*$row["Price"],2);?></td>
                        <td><a href="cart.php?action=delete&orderid=<?php echo $row["Order_ID"];?>"><span>Remove Item <i class="fa-solid fa-xmark"></i></span></a></td>
                        <?php
                        $total = $total + ($row["Quantity"]*$row["Price"]);
                    }
                }
                ?>
                </tr>
                <tr class="lastrow">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>RM <?php echo number_format($total, 2);?></td>
                    <td><button type='submit' name='btnpayment'>Proceed to Payment <i class="fa-solid fa-arrow-right"></i></button></td>
                </tr>
        </table>
    </form>
</div>
</div>
<?php include 'footer.php';?>