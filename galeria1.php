<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOTOWO S. A.</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="fav.ico">
    <link rel="shortcut icon" href="fav.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main">
      
        <?php include_once('logo.php'); ?>

        <?php include_once('menu2.php'); ?>

      
    <div class="slideshow-container">


    <div class="mySlides fade">
      <div class="numbertext">1 / 12</div>
      <img class='koty' src="photo/kot1.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 12</div>
      <img class='koty' src="photo/kot2.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 12</div>
      <img class='koty' src="photo/kot3.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 12</div>
      <img class='koty' src="photo/kot4.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">5 / 12</div>
      <img class='koty' src="photo/kot5.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">6 / 12</div>
      <img class='koty' src="photo/kot6.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">7 / 12</div>
      <img class='koty' src="photo/kot7.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">8 / 12</div>
      <img class='koty' src="photo/kot8.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">9 / 12</div>
      <img class='koty' src="photo/kot9.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">10 / 12</div>
      <img class='koty' src="photo/kot10.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">11 / 12</div>
      <img class='koty' src="photo/kot11.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">12 / 12</div>
      <img class='koty' src="photo/kot12.jpg">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>


    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
      <span class="dot" onclick="currentSlide(8)"></span>
      <span class="dot" onclick="currentSlide(9)"></span>
      <span class="dot" onclick="currentSlide(10)"></span>
      <span class="dot" onclick="currentSlide(11)"></span>
      <span class="dot" onclick="currentSlide(12)"></span>
    </div>

    <script>
      
    var slideIndex = 1;
    showSlides(slideIndex);


    function plusSlides(n) {
      showSlides(slideIndex += n);
    }


    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
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

        <?php include_once('stopka.php'); ?>
    </div>   
</body>
</html>