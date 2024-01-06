<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UnitedHope Foundation</title>
	<link rel="icon" type="icon" href="img/logo/heartbeat_logo.png">
	<script type="text/javascript" src="script_before.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<video autoplay loop muted id="video-background" style="filter: brightness(0.8) saturate(70%)  ">
		<source src="vid/moutains.mp4" type="video/mp4">
	</video>
	<?php
	session_start();
	$connection = mysqli_connect("localhost","root","","UHF");
	$username = $_SESSION['username'];
	$select = "SELECT tel,email,event,password FROM customer WHERE username = '$username'";
	$output = mysqli_query($connection,$select);
	if($output){
		$userData = mysqli_fetch_assoc($output);
		$tel = $userData['tel'];
		$email = $userData['email'];
		$event = $userData['event'];
		$password = $userData['password'];
	}
	$event_explode = explode(",", $event);
	$event1 = $event_explode[0];
	$event2 = $event_explode[1];
	$event3 = $event_explode[2];
	$event4 = $event_explode[3];
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
	<!-- delete confirmation -->
	<div class="profile-confirm-delete-wrapper">
		<div class="profile-confirm-delete-container">
			<div class="profile-confirm-delete-img">
				<img src="img/character/cry.png">
			</div>
			
			<h2>Are you sure you want to delete the following?</h2>
			<p id="profile-confirm-text">NULL</p>
			<div class="profile-confirm-delete-button">
				<button onclick="deleteEventClose()">Cancel</button>
				<button onclick="deleteEvent()">Delete</button>
			</div>
			
		</div>
	</div>
	<!-- logout confirmation -->
	<div class="profile-confirm-logout-wrapper">
		<div class="profile-confirm-logout-container">
			<div class="profile-confirm-logout-img">
				<img src="img/character/cry.png">
			</div>
			
			<h2>Are you sure you want to Logout?</h2>
			<div class="profile-confirm-logout-button">
				<button onclick="logoutClose()">No</button>
				<form method="POST" action="logout.php" name="logout_form" id="logout_form" >
					<input type="submit" name="logout" value="Yes">
				</form>
			</div>
			
		</div>
	</div>
	<!-- Blur -->
	<div class="profile-blur">

		<div class="profile-main-wrapper">
			<div class="profile-main-container">
				<h1 class="text-center">Personal Information</h1>
				<form method="POST" action="update_profile.php" name="update_form" class="profile-main-form">
					<table>
						<tr>
							<th>Username</th>
							<th>:</th>
							<td>
								<input style="cursor: not-allowed" type="text" name="username" value="<?php echo "$username"; ?>" disabled>
							</td>
						</tr>
						<tr>
							<th>Email</th>
							<th>:</th>
							<td>
								<input type="text" name="email" value="<?php echo "$email"; ?>" required>
							</td>
						</tr>
						<tr>
							<th>Phone number</th>
							<th>:</th>
							<td>
								<input type="text" name="tel" value="<?php echo "$tel"; ?>" required>
							</td>
						</tr>
						<tr>
							<th>Old password</th>
							<th>:</th>
							<td>
								<input type="password" name="password" id="oldPassword" oninput="startPassword()">
							</td>
						</tr>
						<tr>
							<th>New password</th>
							<th>:</th>
							<td>
								<input type="password" name="newpassword" style="cursor: not-allowed;" oninput="checkPassword()"  id="password" disabled>
							</td>
						</tr>
						<tr>
							<th>Confirm new password</th>
							<th>:</th>
							<td>
								<input type="password" name="confirmnewpassword" style="cursor: not-allowed;" oninput="checkPassword()"  id="confirmPassword" disabled>
								<span id="passwordMatchMessage" style="color: red; position: absolute;"></span>
							</td>
						</tr>
						<tr>
							
							<th>Events</th>
							<th>:</th>
							<?php
							if (empty($event1) && empty($event2) && empty($event3) && empty($event4)) {
							    echo '
							    <td>
								<input disabled style="font-size:15px; cursor: not-allowed;" type="text" name="noEvent" value="You have no events registered right now!">
								</td>';
							}
							?>

						</tr>


						<?php
						if(!empty($event1)){
						echo '
							<tr>
							<th></th>
							<th></th>
							<td id="event1" class="profile-event-button">
								<input  type="text" name="event1" value="' . $event1. '" style="cursor: not-allowed;" readonly>
								<button onclick="deleteEventConfirmation(\'Donation to Orphanage\')">Delete</button>				
							</td>
						</tr>';
						}
						if (!empty($event2)) {
						echo '<tr>
							<th></th>
							<th></th>
							<td id="event2" class="profile-event-button">
								<input  type="text" name="event2" value="' . $event2. '" style="cursor: not-allowed;" readonly>
								<button onclick="deleteEventConfirmation(\'Clothes Donation\')">Delete</button>				
							</td>
						</tr>';
						}
						if(!empty($event3)){
						echo '<tr>
							<th></th>
							<th></th>
							<td id="event3" class="profile-event-button">
								<input  type="text" name="event3" value="' . $event3. '" style="cursor: not-allowed;" readonly>
								<button onclick="deleteEventConfirmation(\'Blood Donation\')">Delete</button>				
							</td>
						</tr>';
						}
						if(!empty($event4)){
						echo '<tr>
							<th></th>
							<th></th>
							<td id="event4" class="profile-event-button">
								<input  type="text" name="event4" value="' . $event4. '" style="cursor: not-allowed;" readonly>
								<button onclick="deleteEventConfirmation(\'Funding for Palestine\')">Delete</button>				
							</td>
						</tr>';
						}
						?>

					</table>
					<div class="profile-main-button">
						<button onclick="logoutEventConfirmation()">Log out</button>
						<input type="submit" id="profile_submit" class="text-center" value="Update">	
					</div>
						
				</form>

				
				
				
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