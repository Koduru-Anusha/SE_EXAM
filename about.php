<?php
@include 'config.php';
session_start();
if (!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>
   <style>
      .container {
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 20px;
         padding-bottom: 60px;
      }

      .container .content {
         text-align: center;
      }

      .container .content h3 {
         font-size: 30px;
         color: #333;
      }

      .container .content h3 span {
         background: crimson;
         color: #fff;
         border-radius: 5px;
         padding: 0 15px;
      }

      .container .content h1 {
         font-size: 50px;
         color: #333;
      }

      .container .content h1 span {
         color: crimson;
      }

      .container .content p {
         font-size: 25px;
         margin-bottom: 20px;
      }

      .navbar {
         display: flex;
         justify-content: space-between;
         align-items: center;
         background: #333;
         padding: 10px 20px;
         color: #fff;
         position: relative;
      }

      .navbar a {
         color: #fff;
         text-decoration: none;
         margin-right: 10px;
      }

      .navbar a:hover {
         color: crimson;
      }

      .navbar .logout-btn {
         position: absolute;
         top: 50%;
         right: 20px;
         transform: translateY(-50%);
      }
      * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
  animation-duration: 1s;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1s;
}

@keyframes fade {
  from {opacity: 0.4}
  to {opacity: 1}
}
   </style>
</head>
<body>
<div class="navbar">
      <div class="navbar-links">
         <a href="user_page.php">Home</a>
         <a href="about.php">About Us</a>
         <a href="report.php">Report</a>
         <a href="contactus.php">Contact Us</a>
      </div>
      <div class="logout-btn">
         <a href="logout.php" class="btn">Logout</a>
      </div>
   </div>
   <div class="container">
      <div class="content">

      </div>
   </div>

<!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://www.punjabnewsexpress.com/images/article/article164070.jpg?v=220422103316" style="width:100%">
  <div class="text">Exam office</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://news.aglasem.com/wp-content/uploads/2021/06/Untitled-design-2021-06-08T113850.274-750x375.jpg?crop=1" style="width:100%">
  <div class="text">Exam office</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://cache.careers360.mobi/media/article_images/2022/11/27/amritha_university.jpg" style="width:100%">
  <div class="text">Exam office</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Automatic slideshow
function autoSlides() {
  showSlides(slideIndex += 1);
}

// Set interval for automatic slideshow
setInterval(autoSlides, 3000); // Change slide every 3 seconds (adjust as needed)

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>
