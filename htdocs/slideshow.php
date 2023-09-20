<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.mySlides {display: none;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
</style>
</head>
<body>

<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>

<div class="slideshow-container">
<div class="mySlides">
  <img src="fer1.png" style="width:20%;position:absolute;right:30px;top:100px">
</div>
<div class="mySlides">
  <img src="fer3.png" style="width:20%;position:absolute;right:30px;top:100px">
</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
 
  slides[slideIndex-1].style.display = "block";  
  
  setTimeout(showSlides, 400); // Change image every 2 seconds
}
</script>

</body>
</html> 