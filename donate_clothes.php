<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Donate clothes</title>
	<link rel="icon" type="icon" href="img/logo/heartbeat_logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><?php
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
	<div class="profile-blur">
		<div class="article-text">
			<img src="img/article/clothes.png">
			<h1>WHERE TO DONATE YOUR CLOTHES IN THE KLANG VALLEY</h1>
			<h2>FASHION INSIDER: THE MODELS LAB KL FOUNDER AYYMAN RAHIM REDEFINES THE FASHION SCENE WITH A WAVE OF LOCAL FACES</h2>
			<p>
				If you’re doing a bit of spring cleaning or have a big wardrobe with very little that you actually wear, here’s a way for you to do something meaningful with your gently-loved clothes. Donate your used garments to those in need so that they will be passed down to new owners who will appreciate them just like you did. Like thrift shopping, donating clothes is a great way to practice sustainability in fashion as it reduces clothing wastage, which is a significant contributor to the pollution of the environment. A good deed that helps both people and the planet, donating is definitely an activity we all should start being proactive about. Nonetheless, it is essential to ensure that the clothes you’re donating are in good condition, as they will directly be given to those in need. If you’re ready to start donating now, here are some locations within the Klang Valley where you can make a meaningful impact.
			</p>
			<br><br>
			<h1  class="text-center">1RECYCLING CENTRE BY 1 UTAMA</h1>
			<div class="article-header-container">
				<img src="img/article/1u.png">
			</div>
			<p>
				 This sustainable initiative was launched by 1 Utama Shopping Centre to spread awareness of the zero-waste culture. Spot the recycling booths at Level B2, where you can make quick drop-offs of your items, as well as the Art-Cycling Installation that’s created with recycled materials from the mall. Other than clothing, this spot also welcomes e-waste like mobile phones, along with plastics, aluminium, paper, bags, toys and lanyards.
			</p>
			<br><br>
			<h1  class="text-center">COMMUNITY RECYCLE FOR CHARITY (CRC)</h1>
			<div class="article-header-container">
				<img src="img/article/recycle.png">
			</div>
			<br>
			<p>These familiar yellow bins can be seen in a lot of neighbourhoods, so you would’ve definitely come across one by now. If you have one of these near you, this is a pretty convenient way to donate regularly. Clothes or even pre-loved furniture will be distributed to charity homes, giving your belongings directly to those in need.</p>
			<br><br>
			<h1 class="text-center">KLOTH CARES</h1>
			<div class="article-header-container">
				<img src="img/article/donate.png">
			</div>
			<p>With an aim to reduce clothing waste in landfills, Kloth Cares collects donated garments and redistributes them to bundle shops and charities. This organisation also carries out various green initiatives, such as collecting and recycling loose plastic bottles, along with hosting upcycling events and kick-starting green movements to encourage fellow Malaysians to be more environmentally conscious when it comes to fashion. Find a Kloth Cares bin near you here.</p>
			<br><br>
			<h1>Article By</h1>
			<p><a href="https://www.buro247.my/fashion/shopping/places-to-donate-clothes-in-kl-and-selangor.html">https://www.buro247.my/fashion/shopping/places-to-donate-clothes-in-kl-and-selangor.html</a></p>
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