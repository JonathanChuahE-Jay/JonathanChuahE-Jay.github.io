<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stop Palestine War</title>
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
	<div class="profile-blur">
		<div class="article-text">
			<img  src="img/article/palestine_lone.jpg">
			<h1>Palestine</h1>
			<h2>The catastrophe facing the Palestinian people is a defining global justice issue of our time.</h2>
			<h3>STATEMENT ON PALESTINE (OCTOBER 2023)</h3>
			<p>
				It is not a conflict between two equal sides. It is an occupation by a powerful military state, armed and supported by the West, against an impoverished, stateless and displaced people.
				<br><br>
				For over 70 years, Israel has subjected Palestinians to systematic human rights abuses, severe discrimination, and deadly military force. A fourth generation of Palestinian children are being brought up in refugee camps, in chronic poverty, denied the right to return to their family homes. Over a million Palestinians suffer discrimination over access to public services, land and employment. Israel’s siege of Gaza has condemned its 1.9 million inhabitants to poverty and psychological violence. The construction of the apartheid wall, the military closure of the Jordan Valley, and the annexation of East Jerusalem are creating an irreversible reality of permanent occupation.
				<br><br>
				Governments around the world, including the UK government, have enabled Israel to carry out this oppression. Israel’s oppressive rule over the Palestinian people relies on the support of countries and companies which back  Israel through diplomatic support, trade and investment. UK-based companies sell weapons and military technology to Israel, which it uses against the Palestinian people. While the UK government does nothing to hold Israel to account,  Israel continues to deepen its repressive rule. 
				<br><br>
				We support the Palestinian people’s struggle for justice and their call for people of conscience to join Boycott, Divestment and Sanctions (BDS) campaigns to stop businesses and governments from lending support to oppression, and to pressure the Israeli government to respect Palestinians rights and comply with international law. 
			</p>
			<br>
			<div class="article-right-img">
				<img src="img/article/P_broken_building.jpg">
			</div>
			<h1>Take action today</h1>
			<br>
			<h2>Israel is deliberately starving Palestinians</h2>
			<p>
				The right to food is an internationally recognised human right. But for Palestinians, this right is under attack by Israel’s apartheid and occupation regime.
			</p>
			<p>
				We are deeply concerned by the escalation of violence in the occupied Palestinian territory of the Gaza Strip and the West Bank, and Israel. This has resulted in an unacceptable loss of life — and we urge all parties, including the international community to work to stop the bloodshed.
			</p>
			<br>
			<p>"Each and every day, Palestinians have suffered from war for more than 70 years. They live in oppression and their right has been denied. They can’t go to work, school, and visit their relatives. Their lives are like in prison, besieged in their own country without access to food, water, electricity, medical, and other basic necessities.</p>
			<br><br>
			<h1>Article By</h1>
			<p><a href="https://waronwant.org/our-work/palestine">https://waronwant.org/our-work/palestine</a></p>
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