<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>EVax</title>
</head>
<body>

<?php include('includes/header.php');?>
<center>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/1st.jpg" class="imgS" style="width:70%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/2nd.jpg" class="imgS" style="width:70%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/3rd.jpg" class="imgS" style="width:70%">

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</center>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

</script>

<?php include('includes/footer.php');?>
</body>
</html>