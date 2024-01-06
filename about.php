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
	<div class="profile-blur">
		<div class="about-header-wrapper">
			<div class="about-header-container">
				<h1 class="a-up-down">About us - Empowering Orphans for a Brighter Tomorrow</h1>
				<p class="a-fade-in">Welcome to United Hope Foundation, where we are dedicated to making a positive difference in the lives of orphaned children. Our mission is to provide love, care, and opportunities for orphans, ensuring they have the chance to grow, thrive, and reach their full potential.</p>
				<img src="img/about/stacking_hands.png" class="a-zoom-out">
			</div>
		</div>
		<!-- Mission and vision -->
		<div class="about-mv-wrapper">
					<div class="about-mv-container a-slide-right">
						<span>
							<img src="img/icon/rocket.png">
							<h3>Our Vision</h3>
						</span>
						A world where every child has a loving family.
					</div>
					<div class="about-mv-container a-slide-left">
						<span>
							<img src="img/icon/target.png">
							<h3>Our Mission</h3>
						</span>
						We ease despair and give hope to children through loving families.
					</div>
				</div>
				<br><br><br><br>
		<div class="about-middle-text-wrapper target-fade">
			<div class="about-middle-text-container">
				<h1>Every Child Needs a Family</h1>
				<br>
				<p>United Hope is a non-profit foundation that endeavours to give institutionalised children and unplanned, at-risk, newborn babies the joy of growing in the care of a loving family in accordance with our tag-line: Every Child Needs a Family.</p>
			</div>
		</div>
		<br><br><br><br>
		<!-- Meet our team -->
		<h1 class="text-center">Meet our team</h1>
		<p class="text-center mini">Hover picture</p>
		<br>
		<div class="about-mot-wrapper">
			<div class="about-mot-container">
				<div class="about-mot-inner-card">
					<div class="about-mot-front-card">
						<img src="img/about/unknown.jpg">
					</div>
					<div class="about-mot-back-card">
						<img src="img/about/stacking_hands.png">
						<div class="about-mot-text-card">
							<p>Hello my name is jonathan, a software engineering student at Uniten</p>
						</div>
					</div>
				</div>
			</div>
			<div class="about-mot-container">
				<div class="about-mot-inner-card">
					<div class="about-mot-front-card">
						<img src="img/about/unknown.jpg">
					</div>
					<div class="about-mot-back-card">
						<img src="img/about/stacking_hands.png">
					</div>
				</div>
			</div>

			<div class="about-mot-container">
				<div class="about-mot-inner-card">
					<div class="about-mot-front-card">
						<img src="img/about/unknown.jpg">
					</div>
					<div class="about-mot-back-card">
						<img src="img/about/stacking_hands.png">
					</div>
				</div>
			</div>

			<div class="about-mot-container">
				<div class="about-mot-inner-card">
					<div class="about-mot-front-card">
						<img src="img/about/unknown.jpg">
					</div>
					<div class="about-mot-back-card">
						<img src="img/about/stacking_hands.png">
					</div>
				</div>
			</div>

			<div class="about-mot-container">
				<div class="about-mot-inner-card">
					<div class="about-mot-front-card">
						<img src="img/about/unknown.jpg">
					</div>
					<div class="about-mot-back-card">
						<img src="img/about/stacking_hands.png">
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br>
		<!-- Founder story -->
		<div class="about-fs-background">
			<h1>Founder story</h1>
			<br>
			<p>
				In the bustling halls of our university, a group of ambitious software engineering students found themselves captivated by a shared vision. Fueled by a desire to create tangible change, they set out on a journey to leverage their technical skills for a cause that would leave a lasting impact on the world.
				<br><br>
				United by a passion for philanthropy and armed with coding prowess, this dynamic team identified a critical gap in the support systems for orphaned children worldwide. Witnessing the struggles faced by orphanages in securing consistent funding, they recognized an opportunity to innovate and make a difference.
				<br><br>
				Enter "United Hope Foundation," a donation website conceived not just as a charitable platform but as a solution to a pressing problem. The team dove headfirst into the complexities of software development, facing challenges and setbacks but always driven by the collective commitment to their mission.
				<br><br>
				United Hope Foundation was envisioned as more than a conduit for financial support; it was designed to be a streamlined, user-friendly platform that would connect donors directly with the children they were impacting. The founders understood that fostering a sense of community and personal connection would be crucial to the success of their endeavor.
				<br><br>
				Late nights turned into early mornings as lines of code transformed into a sophisticated, functional website. The team's dedication to creating a seamless user experience and incorporating features that facilitated meaningful connections between donors and orphans set United Hope Foundation apart from traditional donation platforms.
				<br><br>
				Upon launch, United Hope Foundation garnered attention not only for its philanthropic mission but also for its innovative approach to online giving. Donors from various corners of the globe resonated with the transparency, accountability, and personal touch offered by the platform.
				<br><br>
				The journey wasn't without its hurdles – debugging sessions, pivots in strategy, and the challenges of navigating the non-profit landscape. However, every obstacle was met with resilience, determination, and the unwavering belief that their project could make a difference.
				<br><br>
				As United Hope Foundation gained traction, the founders transitioned from university students to entrepreneurs, navigating the complexities of managing a social impact startup. Their story became a testament to the potential of combining technical expertise with a passion for social change.
				<br><br>
				Today, the founders of United Hope Foundation continue to refine and expand their platform, driven by the real-world impact they witness every day. Their journey from a university project to a thriving social enterprise serves as inspiration for aspiring entrepreneurs who believe that technology, when wielded with purpose, can be a powerful force for good.
			</p>
		</div>
		<!-- Goals -->
		<br><br><br><br>
		<h1 class="text-center">Our goals</h1>
		<div class="about-goals-wrapper">
			<div class="about-goals-container">
				<img src="img/icon/aware.png">
				<h3>Awareness</h3>
				<p>Create awareness of the negative effects of children growing up in institutions</p>
			</div>
			<div class="about-goals-container">
				<img src="img/icon/light-bulb.png">
				<h3>Transform</h3>
				<p>End the institutionalisation of children</p>
			</div>
			<div class="about-goals-container">
				<img src="img/icon/career.png">
				<h3>Advancement</h3>
				<p>Transform child care in Malaysia into one that nurtures and prospers children and families</p>
			</div>
			<div class="about-goals-container">
				<img src="img/icon/support.png">
				<h3>Collaboration</h3>
				<p>Help the government and stakeholders strengthen family and community based services.</p>
			</div>
			<div class="about-goals-container">
				<img src="img/icon/society.png">
				<h3>Society-change</h3>
				<p>Change society’s views on orphans and unplanned pregnancies</p>
			</div>
			<div class="about-goals-container">
				<img src="img/icon/cradle.png">
				<h3>Salvation</h3>
				<p>Reduce and end abandoning of babies</p>
			</div>
		</div>
	<!-- Partners -->
	<br><br>
	<h1 class="text-center">Our Partners</h1>
	<div class="carousel-main">
	    	<div class="carousel-slide">
	    		<img src="img/icon/company1.png">
	    		<img src="img/icon/company2.png">
	    		<img src="img/icon/company3.png">
	    		<img src="img/icon/company4.png">
	    		<img src="img/icon/company5.png">
	    		<img src="img/icon/company6.png">
	    		<img src="img/icon/company7.png">
	    	</div>
	    	<div class="carousel-slide">
	    		<img src="img/icon/company1.png">
	    		<img src="img/icon/company2.png">
	    		<img src="img/icon/company3.png">
	    		<img src="img/icon/company4.png">
	    		<img src="img/icon/company5.png">
	    		<img src="img/icon/company6.png">
	    		<img src="img/icon/company7.png">
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