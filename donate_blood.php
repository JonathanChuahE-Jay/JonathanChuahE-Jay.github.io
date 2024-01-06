<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Donating blood</title>
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
			<img src="img/article/take-blood.png">
			<h1>Advantages and disadvantages of donating blood</h1>
			<p>
				Donating blood can help other people to maintain good health or allow them to stay alive. There may also be benefits of blood donation for the donor. However, a person may wish to discuss the possible risks before giving blood.
				<br><br>
				If a person’s blood levels fall due to an accident or illness, or if their blood is not functioning properly, there will not be enough oxygen or other nutrients to maintain their vital organs.
				<br><br>Donating whole blood can help these people.
				<br><br>
				A similar process to whole blood donation is apheresis. This provides other blood components, such as platelets. A donation of platelets can help people who have issues related to clotting. It may also provide antibodies to help fight a disease, such as COVID-19.
				<br><br>Giving blood can be a life saving action, but it may also have benefits for the donor. In this article, learn about the effects of giving blood.
			</p>
			<br><br>
			<h1>Advantages of blood donation</h1>
			<p>
				Donating blood can help people with many health conditions, such as those who:
			</p>
			<br>
			<ul>
				<li>have sickle cell disease or another illness that affects the blood</li>
				<li>are undergoing cancer treatment</li>
				<li>are undergoing surgery, such as cardiovascular or orthopedic surgery</li>
				<li>have an inherited blood disorder</li>
				<li>are undergoing a transplant</li>
				<li>need treatments involving plasma or other blood products</li>
				<li>have internal or external bleeding due to an injury</li>
			</ul>
			<br>
			<h2>COVID-19</h2>
			<p>People who have recovered from COVID-19 may be able to help others with the disease by donating blood plasma, according to the Food and Drug Administration (FDA)Trusted Source.
			<br><br>
			Their plasma can contain antibodies to the infection. If another person receives this plasma, it may help their body fight the virus.</p>
			<br><br>
			<h2>Benefits for the donor</h2>
			<p>For many people, blood donation offers many health benefits with few risks. The strict regulation of blood banks means that a donor can give their blood or plasma safely in the United States. Donated blood can save the lives of people in need. However, according to some medical professionals, it may also benefit the donor. The sections below will look at some benefits for the donor in more detail.</p>
			<br>
			<h2>Identifying adverse health effects</h2>
			<p>
			Each person who donates blood completes a simple physical examination and blood test before giving blood.
			These are not in-depth tests, but they may help identify unknown health concerns, such as anemia or high or low blood pressure.
			The test will check the person’s:</p>
			<br>
			<h2>Lessons learned and recommendations</h2>
			<p>The review of the literature has revealed several lessons. First, the orphanages current dependence on international donations and volunteer efforts is largely unsustainable. The financial resources coming from donors are rarely guaranteed while the volunteers’ presence in the orphanages is only for short periods. This lack of steady income source causes financial issues which creates poor living conditions and human rights violations for the orphans. The overdependence on donations has given</p>
			<ul>
				<li>blood pressure</li>
				<li>body temperature</li>
				<li>heart rate</li>
				<li>hemoglobin, or iron, levels</li>
			</ul>
			<p>If the test reveals a problem, the person will not be able to donate blood. However, the results could be a first step toward seeking treatment.</p>
			<br><br>
			<h2>Contributing to the community</h2>
			<p>Donating one unit of blood may save the lives of up to three people, according to the American Red Cross.Blood donors provide a vital service to the community. Making a difference in the lives of others can boost a donor’s sense of well-being.</p>
			<br><br>
			<h1>Disadvantages</h1>
			<p>
				Donating blood is safe, as long as the center follows the standard guidelines. The U.S. and many other countries have strict regulations to ensure safety. The FDA and American Association of Blood Banks (AABB) monitor blood banks for this purpose.
				<br>
				Safety precautions they take include:
			</p>
			<ul>
				<li>screening donors for existing health conditions</li>
				<li>using new needles for each donation</li>
				<li>having professional staff on hand</li>
				<li>providing monitoring and refreshments to ensure a safe recovery</li>
			</ul>
			<p>However, there are some potential disadvantages of donating blood. The following sections will discuss these in more detail.</p>
			<br><br>
			<h2>Temporary reactions</h2>
			<p>Sometimes, a person can experience side effects after donating blood. Although severe adverse effects are rare, temporary reactions can occur, including:</p>
			<ul>
				<li>weakness</li>
				<li>dizziness</li>
				<li>lightheadedness</li>
				<li>feeling faint</li>
				<li>nausea</li>
				<li>bleeding under the skin or bruising</li>
			</ul>
			<p>Some ways of minimizing these effects after donation include drinking plenty of fluids and eating well-balanced meals over the next 24–48 hours.</p>
			<p>Foods that can boost a person’s iron intake include:</p>
			<ul>
				<li>spinach</li>
				<li>iron-fortified juices and cereals</li>
				<li>red meat</li>
			</ul>
			<br><br>
			<h1>Summary</h1>
			<p>Blood donation can save lives and offer many emotional and physical benefits for the donor. Some people will experience minor side effects of donating blood, such as lightheadedness, bruising, or light bleeding. Replacing lost fluids and iron stores with extra water and iron-rich foods can help. Keeping the bandage over the needle site for a few hours after the donation and avoiding strenuous activity can help minimize adverse effects and help the body recover more quickly. If an individual experiences any severe symptoms, they should contact their doctor, or call 911 in an emergency.</p>
			<br><br>
			<h1>Article By</h1>
			<p><a href="https://www.medicalnewstoday.com/articles/blood-donation-side-effects">https://www.medicalnewstoday.com/articles/blood-donation-side-effects</a></p>
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