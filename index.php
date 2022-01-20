<!DOCTYPE>
<html>
	<head>
		<title>
			The Dream Hotel
		</title>
		<link rel="stylesheet" href="home.css">
	</head>


	<body>

		<h1><p style="color: #e6b800; display: inline;">MW Jarriott</p></h1>

		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="#rooms_and_rates">ROOM GALLERY</a></li>
			<li><a href="image_gallery.php">IMAGE GALLERY</a>
			<li style="float: right;"><a href="#contact">Contact Details</a></li>
		</ul>

		<div class="slideshow-container">

		<div class="mySlides fade">
		  <img id="1" src="Images/1.jpg" style="width:100%">
		  <div class="text">ENJOY THE DREAM EXPERIENCE</div>
		</div>

		<div class="mySlides fade">
		  <img id="2" src="Images/2.jpg" style="width:100%">
		  <div class="text">REDEfINE LUXURY</div>
		</div>

		<div class="mySlides fade">
		  <img id="3" src="Images/3.jpg" style="width:100%">
		  <div class="text">SAVOUR EVERY SERVE, EVERY SERVICE</div>
		</div>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span>
		  <span class="dot"></span>
		  <span class="dot"></span>
		</div>

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
		  setTimeout(showSlides, 4500); // Change image every 4.5 seconds
		}
		</script>
		<br><br>
		<a class="reserve_room" href="user_login.php">RESERVE A ROOM</a><br>

		<h2 class="welcome1">Experience a good stay, enjoy fantastic offers</h2><br>
		<h2 class="welcome2">Find our friendly welcoming reception</h2><br>

		<h2 class="r_room">OUR ROOMS</h2><br>
		<div id="rooms_and_rates" class="basic_box">
			<div class="row">
  				<div class="column">
    				<img src="images/A10.jpg" alt="Snow" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/A11.jpg" alt="Forest" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/A13.jpg" alt="Mountains" style="width:100%">
  				</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3>Single bed</h3>
  				</div>
  				<div class="column">
    				<h3>Double beds</h3>
  				</div>
  				<div class="column">
    				<h3>Four beds</h3>
  				</div>
			</div>
		</div><br>
		<div id="contact" class="footer">
			<hr>
			<h2 class="foot-text">Contact Us!</h2>
			<h3 class="foot-text">Developers: Mahima Bachhav, Pratiksha Shitole, Aishwarya Shinde, Pratiksha Patil<br>Contact number :- 9864231212</h3><br>
		</div>
	</body>
</html>
