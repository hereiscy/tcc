<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers & Recommendation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comic+Sans+MS">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/webstyle.css">
    <script src="https://kit.fontawesome.com/f8c1c8b56e.js"></script>
</head>
<?php include 'food_ordering_system.php';
include 'header.php';?>
<div class="content">
<div class="slideshow-container">
            <div class="mySlides fade">
                <img src="Images/offer1.jpg" style="width:80%;height:500px;">
            </div>
            <div class="mySlides fade">
                <img src="Images/offer2.jpg" style="width:80%;height:500px;">
            </div>
            <div class="mySlides fade">
                <img src="Images/offer3.png" style="width:80%;height:500px;">
            </div>
            <a class="prev" onclick="plusSlides(-1)"></a>
            <a class="next" onclick="plusSlides(1)"></a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
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
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 6000);
            }

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
</script>
<div class="offerdes">
<p>Discover a bounty of savings at Tweet Cafe! Our exclusive deals and promotions bring you the freshest organic treats at unbeatable prices. Savor the goodness of nature with special discounts on a wide array of nutrient-rich options. From farm-fresh vegetables and meats to juicy fruits, our offers make wholesome dining accessible to everyone. Join our loyalty program for extra perks, ensuring your journey to healthier choices is both nourishing and budget-friendly. At Tweet Cafe, we're dedicated to making organic living a delightful experience for your well-being and your wallet. Embrace the goodness with our irresistible offers today!</p>
</div>
<?php include 'footer.php';?>