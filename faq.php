<?php
session_start();
include 'food_ordering_system.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comic+Sans+MS">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/webstyle.css">
    <script src="https://kit.fontawesome.com/f8c1c8b56e.js"></script>
    <style>
         .background {
            background-image: url(Images/aboutfarmerbg.avif);
            background-color: #edf5E1; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;
        }
    </style>
</head>
<?php include 'header.php';?>
<div class="content">
<div class="faqwrapper">
    <div class="container">
        <div class="header">
            <h1>Frequently asked questions</h1>
        </div>    
        <div class="tab">
            <input type="radio" name="acc" id="acc1">
            <label for="acc1">
                <h2>01</h2>
                <h3>How do I create an account?</h3>
            </label>
            <div class="faqcontent"><p>To create an account, simply click on the user logo which is located at the top right. Click on Register Now and enter your ideal username and password, and you are ready to be logged in!</p></div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2">
                <h2>02</h2>
                <h3>How can I place an order?</h3>
            </label>
            <div class="faqcontent"><p>You can easily place an order through our online platform by browsing our menu, selecting the items you'd like to order, and proceeding to checkout. Alternatively, you can also place an order at the cashier.</p></div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3">
                <h2>03</h2>
                <h3>Can I customize my order?</h3>
            </label>
            <div class="faqcontent"><p>Absolutely! We understand that everyone has unique preferences and dietary requirements. You can customize your order by specifying any special instructions or dietary restrictions when placing your order online or by informing our staff.</p></div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc4">
            <label for="acc4">
                <h2>04</h2>
                <h3>Is there a minimum order requirement?</h3>
            </label>
            <div class="faqcontent"><p>Yes, the minimum order requirement will be at least RM 1.</p></div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php';?>