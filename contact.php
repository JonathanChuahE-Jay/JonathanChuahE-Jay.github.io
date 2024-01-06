<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UnitedHope Foundation</title>
	<link rel="icon" type="icon" href="img/logo/heartbeat_logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	session_start();
	$connection = mysqli_connect("localhost","root","","UHF");
	$username = $_SESSION['username'];
	?>
	<nav class="sticky">
	<nav class="navigation">
			<div class="hamburger_icon" onclick="HamburgerToggle()">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<img class="company_logo" src="img/logo/company_logo2.png">
	</nav>
	<nav class="hamburger_menu">
		<ul>
			<li onclick="Login_Home()"><img src="img/icon/white-home-icon.png">Home</li>
			<li onclick="Login_About()"><img src="img/icon/white-about-icon.png">About</li>
			<li onclick="Login_Contact()"><img src="img/icon/contact-icon.png">Contact</li>
			<li onclick="Login_Shop()"><img src="img/icon/cart.png">Shop</li>
			<li onclick="Login_JoinUs()"><img src="img/icon/heart.png">Join Us</li>
			<li onclick="ProfilePage()"><img src="img/icon/unknown.jpg"><p id="profile_name">Profile
				<?php
				echo 
				"<script>
					let pn = document.getElementById('profile_name');
					pn.textContent = '$username';
				</script>"
				?>
			</p>
			</li>

		</ul>
	</nav>
	</nav>
	<!-- Blur -->
	<video autoplay loop muted playsinline id="video-background">
		<source src="vid/earth-background.mp4" type="video/mp4">
	</video>
	<div class="profile-blur">
		<div class="contact-wrapper">
			<div class="contact-container">
				<h1>GET IN TOUCH</h1>
				<div class="contact-text">
					<div class="contact-plan">
						<img src="img/icon/location.png">
						<h3>Address</h3>
						<p>
							Putrajaya Campus
							<br>Jalan IKRAM-UNITEN
							<br>43000 Kajang, Selangor
							<br>MALAYSIA.
						</p>
						<br>
						<img src="img/icon/tel.png">
						<h3>Phone number</h3>
						<p>012-3456789</p>
						<br>
						<img src="img/icon/email.png">
						<h3>Email</h3>
						<p>unitedhopefoundation@gmail.com</p>
					</div>
					<div class="contact-form">
						<h3>Send us a message</h3>
						<p>if you have any inqueries, please dont hesitate to send us a message from here</p>
						<form method="post" action="contactus.php" name="contact_us">
							<input type="text" name="firstname" placeholder="First Name">
							<input type="text" name="lastname" placeholder="Last Name">
							<input type="email" placeholder="Email" name="email">
							<textarea name="message" placeholder="Message"></textarea>
							<input type="submit">
						</form>
					</div>
				</div>
				
			</div>
			
		</div>
	
	<!-- Footer -->
	<footer>
		<div class="footer_wrapper">
			<div class="footer_section footer_spacebetween">
				<div class="footer_container">
					<h3>Using this site:</h3>
					<br>
					<p>Welcome to UnitedHope Foundation, a platform committed to fostering compassion, unity, and support. In times of distress, it is essential that we come together to extend our solidarity. Our hearts go out to the affected communities, and we stand in support of those facing unimaginable challenges. We believe in the power of collective efforts to make a positive impact. Join us as we strive to provide aid, raise awareness, and contribute to the well-being of those in need. Together, we can make a difference, promote understanding, and work towards a more peaceful world.</p>
				</div>

				<div class="footer_container footer_social_media">
					<h4>Connect with us on social media:</h4>
					<br>
				    <ul>
				        <li><a href="https://www.facebook.com/" ><img src="img/social_media/facebook1.png">Facebook</a></li>
				        <li><a href="https://www.instagram.com" ><img src="img/social_media/instagram1.png">Instagram</a></li>
				        <li><a href="https://wa.me/0182727119" ><img src="img/social_media/whatsapp1.png">Whatsapp</a></li>
				     </ul>
				</div>
				
			</div>
		</div>
		
	<p class="text-center">&copy; 2023 UnitedHope Foundation | All rights reserved.</p>
	</footer>
	</div>
		
	<script type="text/javascript" src="script.js"></script>
</body>
</html>