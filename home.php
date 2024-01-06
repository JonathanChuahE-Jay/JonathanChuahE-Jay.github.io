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
	<!-- Header -->
	<div class="header_wrapper white_bg">		
	    <div class="slideshow-container">
	        <div class="mySlides fade">
	            <div class="numbertext">1 / 3</div>
	            <img src="img/header/children.jpg">
	            <div class="text"><h2>We Encourage Participating in <span>Charity!</span></h2></div>
	            <div class="text"><p>Our focus is to make the next generation needful child ready for giving back to the world! Your support is the key to make us successful to make the next generation needful child ready for giving.</p></div>
	            <a href="join_us.php"><button class="slide-button">Join Us Now</button></a>
	        </div>

	        <div class="mySlides fade">
	            <div class="numbertext">2 / 3</div>
	            <div class="text"><h2>Bringing <span>Smiles</span> to Millions of People!</h2></div>
	            <img src="img/header/eating1.jpeg">
	            <div class="text"><p>Our commitment lies in preparing the next generation of needful children to become impactful contributors to the world. Your support is the key to our success in shaping these young minds and empowering them to make positive contributions. Together, we can make a significant difference in ensuring that the next generation is ready and equipped to give back to the world.
	            </p></div>
	            <a href="join_us.php"><button class="slide-button">Join Us Now</button></a>
	        </div>

	        <div class="mySlides fade">
	            <div class="numbertext">3 / 3</div>
	            <div class="text"><h2>Charity for a <span>Better Future</span> and <span>Happiness!</span></h2></div>
	            <img src="img/header/thankyou1.jpg">
	            <div class="text"><p>We're focused on preparing needful children for a future of giving back. Your support is crucial to our success. Together, we can empower the next generation to make a positive impact on the world</p></div>
	            <a href="join_us.php"><button class="slide-button">Join Us Now</button></a>
	        </div>
	    </div>
	    <div class="text-center dot-container">
	        <span class="dot" onclick="currentSlide(1)"></span>
	        <span class="dot" onclick="currentSlide(2)"></span>
	        <span class="dot" onclick="currentSlide(3)"></span>
		</div>
	</div>
	

	<hr>
	<!-- Campaign -->
	<div class="grey_bg campaign_overall">
		<div class="campaign_section">
			<div class="campaign_container">
				<div class="campaign_view">
					<h2>Our campaign</h2>
					<br>
					<p>United, we have the power to challenge the influence of governments, corporations, and the media and emerge victorious.</p>
					
				</div>
			</div>
			<div class="campaign_container">
				<img src="img/campaign/boycott.jpg">
				<br>
				<br>
				<h2 class="text-center">Right to boycott</h2>		
			</div>
			<div class="campaign_container">
				<img src="img/campaign/donate1.jpg">
				<br>
				<br>
				<h2 class="text-center">Donate</h2>	
			</div>
			<div class="campaign_container">
				<img src="img/campaign/fundraising1.jpg">
				<br>
				<br>
				<h2 class="text-center">Fundraising</h2>	
			</div>
		</div>
	</div>
	<hr> 

	<!-- Articles -->
	<div class="white_bg article_overall">
		<h2 class="text-center padding">Articles</h2>
		<div class="article_section">
			<div class="article_container article_main" onclick="LA1()">
				<img src="img/article/ceasefire.jpg">
				<div class="article_container_item article_main_item">
					<p>13 January 2024</p>
					<br>
					<b>National March for Palestine – Ceasefire NOW</b>
					<a href="free_palestine.php" class="to-right to-bottom">Read more</a>
				</div>
			</div>
			<div class="article_container" onclick="LA2()">
				<img src="img/article/take-blood.png">
				<div class="article_container_item">
					<p>11 November 2023</p>
					<br>
					<b>Advantages and Disadvantage of Donating Blood</b>
					<a href="donate_blood.php" class="to-right to-bottom">Read more</a>
				</div>
			</div>
			<div class="article_container" onclick="LA3()">
				<img src="img/article/clothes.png">
				<div class="article_container_item">
					<p>6 November 2023</p>
					<br>
					<b>Donate Unused Clothes</b>
					<a href="donate_clothes.php" class="to-right to-bottom">Read more</a>
				</div>
			</div>
			<div class="article_container" onclick="LA4()">
				<img src="img/article/ghana.jpg">
				<div class="article_container_item">
					<p>3 November 2023</p>
					<br>
					<b>Funding in ghana</b>
					<a href="funding_in_ghana.php" class="to-right to-bottom">Read more</a>
				</div>
			</div>
			<div class="article_container" onclick="LA5()">
				<img src="img/article/header.jpg">
				<div class="article_container_item">
					<p>13 October 2023</p>
					<br>
					<b>Orphanage Donation</b>
					<a href="orphanage_donation.php" class="to-right to-bottom">Read more</a>
				</div>
			</div>
		</div>
	</div>
	<hr>
	
	<div class="grey_bg uce_overall">
		<h2 class="text-center padding">Up Coming Event </h2>
		<div class="uce_section">
			<div class="uce_container">
				<img src="img/uce/1.jpg">
				<div class="uce_item">
					<div class="uce_text">
						<h3>Donation to Orphanage</h3>
						<p>Supporting orphanages through donations is a powerful way to make a positive impact on the lives of children who may lack familial care and stability. Whether through financial contributions, educational resources, or essential supplies...
						</p>
					</div>
					<div class="uce_plan">
						<img src="img/uce/location.png"> Kajang, Selangor
					</div>
					<div class="uce_plan">
						<img src="img/uce/clock.png"> 8:00am - 5:00pm
					</div>	
					<div class="uce_plan">
						<img src="img/uce/calender.png"> 25 January 2024
					</div>
					<div class="uce-btn">
						<a href="join_us.php"><button>Join Event</button></a>
					</div>
					
				</div>
			</div>
			<div class="uce_container">
				<img src="img/uce/2.jpg">
				<div class="uce_item">
					<div class="uce_text">
						<h3>Clothes Donation</h3>
						<p>Donating clothes is a meaningful way to extend a helping hand to those facing economic challenges. Your gently used clothing items can provide warmth and comfort to individuals and families in need
						</p>
					</div>
					<div class="uce_plan">
						<img src="img/uce/location.png"> Petaling Jaya, Selangor
					</div>
					<div class="uce_plan">
						<img src="img/uce/clock.png"> 8:00am - 5:00pm
					</div>	
					<div class="uce_plan">
						<img src="img/uce/calender.png"> 16 Feburary 2024
					</div>
					<div class="uce-btn">
						<a href="join_us.php"><button>Join Event</button></a>
					</div>
				</div>
			</div>
			<div class="uce_container">
				<img src="img/uce/3.jpg">
				<div class="uce_item">
					<div class="uce_text">
						<h3>Blood Donation</h3>
						<p>Donating blood is a selfless act that can save lives. Every drop contributes to the well-being of those in need. By participating in blood donation drives, individuals provide a lifeline to patients undergoing surgeries, facing medical emergencies, or battling life-threatening conditions. It is a simple yet profound gesture that embodies the spirit of compassion and community support.
						</p>
					</div>
					<div class="uce_plan">
						<img src="img/uce/location.png"> Semenyih, Selangor
					</div>
					<div class="uce_plan">
						<img src="img/uce/clock.png"> 8:00am - 5:00pm
					</div>	
					<div class="uce_plan">
						<img src="img/uce/calender.png"> 22 March 2024
					</div>
					<div class="uce-btn">
						<a href="join_us.php"><button>Join Event</button></a>
					</div>
				</div>
			</div>
			<div class="uce_container">
				<img src="img/uce/palestine_lone.jpg">
				<div class="uce_item">
					<div class="uce_text">
						<h3>Funding for Palestine</h3>
						<p>Funding initiatives for Palestine are crucial to addressing the humanitarian, economic, and development needs of the region
					</p>
					</div>
					
					<div class="uce_plan">
						<img src="img/uce/location.png"> Kuala Lumpur
					</div>
					<div class="uce_plan">
						<img src="img/uce/clock.png"> 8:00am - 5:00pm
					</div>	
					<div class="uce_plan">
						<img src="img/uce/calender.png"> 30 March 2024
					</div>
					<div class="uce-btn">
						<a href="join_us.php"><button>Join Event</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Our volunteer -->
	<div class="white_bg volunteer_overall">
		<h2 class="text-center padding">Volunteers</h2>
		<div class="volunteer_section">
			<div class="volunteer_container">
				<img src="img/volunteer/elon.jpg">
				<div class="volunteer_item">
					<h3>Ellen Mask</h3>
					<p>Reporter</p>
					<div class="volunteer_social_media">
						<a href="https://www.facebook.com/groups/elonmusk1/">
							<img src="img/social_media/facebook.png">
						</a>
						
						<a href="https://www.instagram.com/elonmuskh/?hl=en">
							<img src="img/social_media/instagram.png">
						</a>
						
						<a href="https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
							<img src="img/social_media/twitter.png">
						</a>
						
					</div>
				</div>
			</div>
			<div class="volunteer_container">
				<img src="img/volunteer/bill.jpg">
				<div class="volunteer_item">
					<h3>Mill Dates</h3>
					<p>Photographer</p>
					<div class="volunteer_social_media">
						<a href="https://www.facebook.com/BillGates/">
							<img src="img/social_media/facebook.png">
						</a>
						
						<a href="https://www.instagram.com/thisisbillgates/?hl=en">
							<img src="img/social_media/instagram.png">
						</a>
						
						<a href="https://twitter.com/BillGates">
							<img src="img/social_media/twitter.png">
						</a>
						
					</div>
				</div>
			</div>
			<div class="volunteer_container">
				<img src="img/volunteer/mark.jpg">
				<div class="volunteer_item">
					<h3>Wark Zulker</h3>
					<p>Helper</p>
					<div class="volunteer_social_media">
						<a href="https://www.facebook.com/zuck/">
							<img src="img/social_media/facebook.png">
						</a>
						
						<a href="https://www.instagram.com/zuck/?hl=en">
							<img src="img/social_media/instagram.png">
						</a>
						
						<a href="https://twitter.com/finkd?lang=en">
							<img src="img/social_media/twitter.png">
						</a>
						
					</div>
				</div>
			</div>
			<div class="volunteer_container">
				<img src="img/volunteer/bob.jpg">
				<div class="volunteer_item">
					<h3>Bob</h3>
					<p>Engineer</p>
					<div class="volunteer_social_media">
						<a href="https://www.facebook.com/BobtheBuilder/">
							<img src="img/social_media/facebook.png">
						</a>
						
						<a href="https://www.instagram.com/bob_e_builder/?hl=en">
							<img src="img/social_media/instagram.png">
						</a>
						
						<a href="https://twitter.com/bobthebuilder?lang=en">
							<img src="img/social_media/twitter.png">
						</a>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Support us -->
	<div class="support_overall grey_bg">
		<h2 class="text-center">Support Us</h2>
		<div class="support_section">
			<div class="support_container">	
				<img src="img/join/join_us.jpg">
					<p><b> Join us </b><br>Strength emanates from our unity. Join us, for our collective power is forged by standing together.</p>
					<a href="join_us.php"><button>Join Us</button></a>
			</div>
			<div class="support_container">	
				<img src="img/join/shop2.jpg">
					<p><b> Shop </b><br>Visit our online shop for t-shirts, Keychains, accessories and many more.</p>
					<a href="shopping.php"><button>Shop</button></a>
			</div>
			<div class="support_container">
				<img src="img/join/donate.jpg">	
					<p><b> Donate </b><br>We depend on the generous contributions from our supporters</p>
					<a href="donate.php"><button>Donate</button></a>
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