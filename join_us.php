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
	<video autoplay loop muted id="video-background">
		<source src="vid/sky.mp4" type="video/mp4">
	</video>
	<?php
	session_start();
	$connection = mysqli_connect("localhost","root","","UHF");
	$username = $_SESSION['username'];

	// validation
	$select_validation = "SELECT event FROM customer WHERE username = '$username'";
	$output_validation = mysqli_query($connection, $select_validation);

	if ($output_validation) {
	    $event_validation = mysqli_fetch_assoc($output_validation);
	    $event = explode(",", $event_validation['event']);
	    $event1 = $event[0];
	    $event2 = $event[1];
	    $event3 = $event[2];
	    $event4 = $event[3];
	}

	// Select
	$select = "SELECT tel, email FROM customer WHERE username = '$username'";
	$output = mysqli_query($connection,$select);
	$result = mysqli_fetch_assoc($output);
	if($result){
		$tel = $result['tel'];
		$email = $result['email'];
	}
	echo "<script></script>";
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
		<div class="join-us-wrapper">
			<div class="join-us-container">
				<div class="join-us-event-wrapper">
					<div class="join-us-event-container">
						<img src="img/uce/1.jpg">
						<div class="join-us-event-item">
							<h3>Donation to Orphanage</h3>
							<div class="join-us-event-plan">
								<img src="img/uce/location.png"> Kajang, Selangor
							</div>
							<div class="join-us-event-plan">
								<img src="img/uce/clock.png"> 8:00am - 5:00pm
							</div>
							<div class="join-us-event-plan">
								<img src="img/uce/calender.png"> 25 January 2024
							</div>
						</div>
						
					</div>
					<div class="join-us-event-container">
						<img src="img/uce/2.jpg">
						<div class="join-us-event-item">
							<h3>Clothes Donation</h3>
							<div class="join-us-event-plan">
								<img src="img/uce/location.png"> Petaling Jaya, Selangor
							</div>
							<div class="join-us-event-plan">
								<img src="img/uce/clock.png"> 8:00am - 5:00pm
							</div>
							<div class="join-us-event-plan">
								<img src="img/uce/calender.png"> 16 Feburary 2024
							</div>
						</div>
					</div>
					<div class="join-us-event-container">
						<img src="img/uce/3.jpg">
						<div class="join-us-event-item">
							<h3>Blood Donation</h3>
							<div class="join-us-event-plan">
								<img src="img/uce/location.png"> Semenyih, Selangor
							</div>
							<div class="join-us-event-plan">
								<img src="img/uce/clock.png"> 8:00am - 5:00pm
							</div>
							<div class="join-us-event-plan">
								<img src="img/uce/calender.png"> 22 March 2024
							</div>
						</div>
					</div>
					<div class="join-us-event-container">
						<img src="img/uce/palestine_lone.jpg">
						<div class="join-us-event-item">
							<h3>Funding for Palestine</h3>
							<div class="join-us-event-plan">
								<img src="img/uce/location.png"> Kuala Lumpur
							</div>
							<div class="join-us-event-plan">
								<img src="img/uce/clock.png"> 8:00am - 5:00pm
							</div>
							<div class="join-us-event-plan">
								<img src="img/uce/calender.png"> 30 March 2024
							</div>
						</div>
					</div>
					
				</div>
				<form method="POST" action="update.php" name="update">
					<table>
						<tr>
							<th>Name</th>
							<th>:</th>
							<td><input type="text" name="username" value="<?php echo "$username" ?>" disabled></td>
						</tr>
						<tr>
							<th>Phone Number</th>
							<th>:</th>
							<td><input type="text" name="tel" value="<?php echo "$tel" ?>" disabled></td>
						</tr>
						<tr>
							<th>Email</th>
							<th>:</th>
							<td><input type="email" name="email" value="<?php echo "$email" ?>" disabled></td>
						</tr>
						<tr>
							<th>Event</th>
							<th>:</th>
							<td>
								<table>
									<tr>
										<th>Donation to orphanage</th>
										<td><input id="UCE1" type="checkbox" name="UCE1" value="Donation to orphanage"></td>
									</tr>
									<tr>
										<th>Clothes donation</th>
										<td><input id="UCE2" type="checkbox" name="UCE2" value="Clothes donation"></td>
									</tr>
									<tr>
										<th>Blood donation</th>
										<td><input id="UCE3" type="checkbox" name="UCE3" value="Blood donation"></td>
									</tr>
									<tr>
										<th>Funding for palestine</th>
										<td><input id="UCE4" type="checkbox" name="UCE4" value="Funding for palestine"></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<input type="submit">
					
				</form>
			</div>
		</div>
		<?php
			echo "
			<script>
			function checkEventCheckbox(eventId) {
			    let eventCheckbox = document.getElementById(eventId);
			    if (eventCheckbox) {
			        eventCheckbox.checked = true;
			    }
			}
			if ('$event1') {
				checkEventCheckbox('UCE1');
			}
			if ('$event2') {
			    checkEventCheckbox('UCE2');
			}
			if ('$event3') {
			   	checkEventCheckbox('UCE3');
			}
			if ('$event4') {
			    checkEventCheckbox('UCE4');
				}
			</script>";
		?>
	
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
		
	<p class="text-center">&copy; 2023 UnitedHope Foundation by Jonathan Chuah | All rights reserved.</p>
	</footer>
	</div>
		
	<script type="text/javascript" src="script.js"></script>
</body>
</html>