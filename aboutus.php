<?php
session_start();
include 'food_ordering_system.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            <h1>Organisation of Tweet Cafe</h1>
        </div>
        <div class="OFsub-container">

            <div class="teams">
                <div class="name"> Tai Chun Yang</div>
                <div class="roles"> CEO</div>
                <div class="about"> 
                    <p>As the visionary behind Tweet Cafe, Tai Chun Yang drives our mission to provide exceptional dining experiences. With a deep passion for hospitality and a keen eye for detail, he ensures our cafe upholds the highest standards of quality and customer satisfaction. Their leadership inspires our team to continually innovate and excel.</p>
                </div>
            </div>

            <div class="teams">
                <div class="name"> Lim Zhi Siang</div>
                <div class="roles"> COO</div>
                <div class="about">
                    <p>Lim Zhi Siang oversees the daily operations, ensuring that everything runs smoothly and efficiently. With extensive experience in operational management, he is dedicated to maintaining the seamless functioning of our cafe, from supply chain logistics to staff coordination.</p>
                </div>
            </div>

            <div class="teams">
                <div class="name"> Lim Jia Yee</div>
                <div class="roles"> CFO</div>
                <div class="about">
                    <p>Lim Jia Yee manages the financial health of Tweet Cafe. With a sharp mind for numbers and strategic planning, she ensures that we are financially sound and sustainable. Their expertise allows us to invest in high-quality ingredients and innovative concepts.</p>
                </div>
            </div>
			<div class="teams">
                <div class="name"> Ng Chu Ying</div>
                <div class="roles"> CMO</div>
                <div class="about">
                    <p>Ng Chu Ying is the creative force behind our brand's image and outreach. They craft compelling marketing strategies to connect with our community and attract new patrons. With a passion for storytelling and a knack for digital marketing, she ensures that Tweet Cafe stands out in the crowded marketplace.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>