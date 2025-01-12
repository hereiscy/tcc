<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Main Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comic+Sans+MS">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/webstyle.css">
    <script src="https://kit.fontawesome.com/f8c1c8b56e.js"></script>
</head>
<?php include 'food_ordering_system.php';
include 'header.php';?>
<div class="content">
    <div class="welcome">
        <h2>Welcome back to Tweet Cafe, <u><?php echo $_SESSION['username'];?></u>!</h2>
        <p><a href="logout.php">Logout</a></p>
    </div>
       <!-- This is from w3school -->
       <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="Images/slider1.jpg" style="width:80%;height:500px;">
            </div>
            <div class="mySlides fade">
                <img src="Images/slider2.jpg" style="width:80%;height:500px;">
            </div>
            <div class="mySlides fade">
                <img src="Images/slider3.jpg" style="width:80%;height:500px;">
            </div>
            <div class="mySlides fade">
                <img src="Images/slider4.jpg" style="width:80%;height:500px;">
            </div>
            <div class="mySlides fade">
                <img src="Images/slider5.jpg" style="width:80%;height:500px;">
            </div>
            <div class="mySlides fade">
                <img src="Images/slider6.jpg" style="width:80%;height:500px;">
            </div>
            <a class="prev" onclick="plusSlides(-1)"></a>
            <a class="next" onclick="plusSlides(1)"></a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div>
        <script>
            let slideIndex = 0;
            showSlides();
            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000);
            }
        </script>
    <div class="quote">
        <img src="Images/quotebg.jpg" alt="">
        <h1>Our cafe embraces the essence of organic sourcing, where we seek out nature's pathways to deliver fresh, flavorful ingredients. We eschew the conventional methods of food production, opting instead for a more holistic approach that respects the environment and celebrates the true essence of natural flavors</h1>
    </div>
    <h1 class="spchead"><b>Why choose us?</b></h1>
    <div class="extras">
        <div class="box">
            <h2>Affordable and Delicious Food</h2>
            <p>
			We prioritize affordability without compromising on taste or quality, making every meal a satisfying experience for your taste buds and your wallet.            </p>
        </div>
        <div class="box">
            <h2>Support for Local Agriculture</h2>
            <p>
            Our cafe sources fresh ingredients directly from local farmers, ensuring the highest quality in every dish.
            </p>
        </div>
        <div class="box">
            <h2>Diverse Selection</h2>
            <p>
With a diverse menu featuring a variety of cuisines, there's something to satisfy every craving at our cafe.
            </p>
        </div>
    </div>
</div>
<?php include 'footer.php';?>

