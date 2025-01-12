<?php
session_start();
include 'food_ordering_system.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Farmers</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comic+Sans+MS">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/webstyle.css">
    <script src="https://kit.fontawesome.com/f8c1c8b56e.js"></script>
    <style>
         .background {
            background-image: url(Images/aboutusbg.avif);
            background-color: #edf5E1; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;
        }
    </style>
</head>
<?php include 'header.php';?>
<div class="content">
<div class="OFcontainer">
        <div class="OFheader">
            <h1>Our Chefs</h1>
        </div>
        <div class="OFsub-container">

            <div class="teams">
                <img src="Images/fA.jpg" height="100px" alt="">
                <div class="name"> Gamie Oliver</div>
                <div class="roles"> Head Chef</div>
                <div class="about"> 
                    <p>Gamie Oliver leads our culinary team with passion and expertise, crafting delectable dishes that captivate the senses and reflect our commitment to quality and excellence in every bite.</p>
                </div>
            </div>

            <div class="teams">
                <img src="Images/fB.jpg" height="100px" alt="">
                <div class="name"> Gordon Jamsey</div>
                <div class="roles"> Executive Chef</div>
                <div class="about">
                    <p>Meet our esteemed Executive Chef, Gordon Jamsey, renowned for orchestrating culinary excellence with a blend of creativity and precision, ensuring each dish embodies a symphony of flavors and innovation.</p>
                </div>
            </div>

            <div class="teams">
                <img src="Images/fC.jpg" height="100px" alt="">
                <div class="name"> Rigel Ng</div>
                <div class="roles"> Junior Chef</div>
                <div class="about">
                    <p>Rigel Ng brings fresh ideas and enthusiasm to the kitchen, working diligently alongside our seasoned chefs to learn and grow while infusing each creation with youthful energy and creativity.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>