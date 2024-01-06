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
	<video autoplay loop muted id="video-background" style="filter: brightness(0.8) saturate(70%)  ">
		<source src="vid/orphan.mp4" type="video/mp4">
	</video>
	<?php
	session_start();
	$connection = mysqli_connect("localhost","root","","UHF");
	$username = $_SESSION['username'];
	$select = "SELECT tel FROM customer WHERE username = '$username'";
	$output = mysqli_query($connection, $select);
	if($output){
		$userData = mysqli_fetch_assoc($output);
	    $tel = $userData['tel'];
	}
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
		<div class="donate-main-wrapper">
			<div class="donate-value-wrapper">
				<div class="donate-value-container">
					<img src="img/character/love.png">
					<h2>Profile</h2>
					<table>
						<tr>
							<th>Username:</th>
							<td ><p class="profile_name">??</p></td>
						</tr>
						<tr>
							<th>Phone number:</th>
							<td class="profile_tel">??</td>
						</tr>
					</table>
					<br>
					<h2>Donation amount</h2>
					<br>
					<select id="amount" onchange="showTextInput()">
						<option>RM 5</option>
						<option>RM 10</option>
						<option>RM 20</option>
						<option>RM 50</option>
						<option>RM 100</option>
						<option>Others</option>
					</select>
					<input type="text" id="otherAmount" name="otherAmount" value="RM "placeholder="Enter amount">
					<button>Donate</button>
				</div>
			</div>
			<div class="donate-wrapper">
				<div class="donate-container">
					<form>
						<select class="donate-bank-name" required>
							<option selected>...</option>
							<option>Maybank</option>
							<option>Hongleong Bank</option>
							<option>RHB Bank</option>
							<option>Bank Islam</option>
							<option>Public Bank</option>
							<option>OCBC Bank</option>
						</select>
						<br>
						<select class="donate-card-type">
							<option selected>...</option>
							<option>MyDebit</option>
							<option>Visa</option>
						</select>
						<br>
						<div class="donate-card-number">
							<input type="text" name="cardnumber1" required min="4" max="4" placeholder="X    X    X    X" required>
							<input type="text" name="cardnumber2" required min="4" max="4" placeholder="X    X    X    X" required>
							<input type="text" name="cardnumber3" required min="4" max="4" placeholder="X    X    X    X" required>
							<input type="text" name="cardnumber4" required min="4" max="4" placeholder="X    X    X    X" required>
						</div>
						<br>
						<br>
						<div  class="donate-exp-date"> 
							<p>Valid Thru</p>
							<input type="text" name="cardexpdate" required min="2" max="2"placeholder="X    X" required>
							<h3 >/</h3>
							<input type="text" name="cardexpdate" required min="2" max="2"placeholder="X    X" required>
						</div>
					</form>
				</div>
				<div class="donate-container-back">
					<form>
						<input type="text" name="pin" min="3" max="3" placeholder="Pin">
					</form>
				</div>
				<h1 class="donate-arrow" onclick="donateArrow()">&#62;</h1>
			</div>
		</div>
	</div>
	<?php
		echo 
		"<script>
		let profile_name = document.querySelectorAll('.profile_name');
		let profile_tel = document.querySelectorAll('.profile_tel');
		profile_name.forEach(function(profileName){
			profileName.textContent = '$username';
		});
		profile_tel.forEach(function(profileTel){
			profileTel.textContent = '$tel';
		});
		</script>"
	?>
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
	<script type="text/javascript" src="script.js"></script>
</body>
</html>