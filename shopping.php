<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop</title>
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
		<div class="shop-header-wrapper">
			<div class="shop-header-container">
				<div class="shop-header-side">
					<p>SPRING / SUMMER 2024</p>
				</div>
				<div class="shop-header-text">

					<h2>New</h2>
					<h1>Arrival</h1>
					<p>Wrap yourself in purpose and style with our 'Be The Good' shirts! Elevate your wardrobe while making a difference – every purchase supports meaningful donations and positive change. Be fashionable, be impactful, be the good.</p>
					
				</div>
				<div class="shop-header-img">
					<img src="img/shop/btg_grey.png" id="headerImage">
					<form>
						<input type="radio" id="Sradio1" name="image_header" value="img/shop/btg_grey.png" onchange="changeImage()" checked>
						<input type="radio" id="Sradio2" name="image_header" value="img/shop/btg_pink.png" onchange="changeImage()">
						<input type="radio" id="Sradio3" name="image_header" value="img/shop/btg_blue.png" onchange="changeImage()">
					</form>
				</div>
			</div>
		</div>
		<div class="shop-wrapper">
				<div class="shop-filter-section">
					<h2>Filter</h2>
					<input id="searchInput" type="text" name="search" placeholder="search" oninput="filterItems()">
					<a onclick="shopAll()">All</a>
					<a onclick="shopShirt()">Shirts</a>
					<a onclick="shopKC()">Keychains</a>
					<a onclick="shopAccessories()">Accessories</a>
				</div>
				<div class="shop-container">
					<div class="shop-item shirt S">
						<div class="shop-item-img">
							<img src="img/shop/palestine_shirt.png">
						</div>
						<div class="shop-item-text">
							<div class="shop-item-tag">
								<input type="radio" name="size" value="L" checked>
								<input type="radio" name="size" value="M">
								<input type="radio" name="size" value="S">
							</div>
							<h4>Free Palestine shirt</h4>
							<div class="shop-item-quantity">
								<button onclick="decrement(this)">-</button>
								<p>0</p>
								<button onclick="increment(this)">+</button>
							</div>
							<button onclick="shopATC(this)">Add to cart</button>
						</div>
					</div>
					<div class="shop-item shirt M">
						<div class="shop-item-img">
							<img src="img/shop/plain_white.png">
						</div>
						<div class="shop-item-text">
							<div class="shop-item-tag">
								<input type="radio" name="size2" value="L" checked>
								<input type="radio" name="size2" value="M">
								<input type="radio" name="size2" value="S">
							</div>
							<h4>Plain white shirt</h4>
							<div class="shop-item-quantity">
								<button onclick="decrement(this)">-</button>
								<p>0</p>
								<button onclick="increment(this)">+</button>
							</div>
							<button onclick="shopATC(this)">Add to cart</button>
						</div>
					</div>
					<div class="shop-item KC">
						<div class="shop-item-img">
							<img src="img/shop/keychain1.png">
						</div>
						<div class="shop-item-text">
							<h4>Handcrafted keychain</h4>
							<div class="shop-item-quantity">
								<button onclick="decrement(this)">-</button>
								<p>0</p>
								<button onclick="increment(this)">+</button>
							</div>
							<button onclick="shopATC(this)">Add to cart</button>
						</div>
					</div>

					<div class="shop-item accessories">
						<div class="shop-item-img">
							<img src="img/shop/bag1.png">
						</div>
						<div class="shop-item-text">
							<h4>Blood donation bag</h4>
							<div class="shop-item-quantity">
								<button onclick="decrement(this)">-</button>
								<p>0</p>
								<button onclick="increment(this)">+</button>
							</div>
							<button onclick="shopATC(this)">Add to cart</button>
						</div>
					</div>
					<div class="shop-item shirt M S">
						<div class="shop-item-img">
							<img src="img/shop/btg_grey.png">
						</div>
						<div class="shop-item-text">
							<div class="shop-item-tag">
								<input type="radio" name="size3" value="L" checked>
								<input type="radio" name="size3" value="M">
								<input type="radio" name="size3" value="S">
							</div>
							<h4>Be the good grey</h4>
							<div class="shop-item-quantity">
								<button onclick="decrement(this)">-</button>
								<p>0</p>
								<button onclick="increment(this)">+</button>
							</div>
							<button onclick="shopATC(this)">Add to cart</button>
						</div>
					</div>
					<div class="shop-item shirt M">
						<div class="shop-item-img">
							<img src="img/shop/btg_pink.png">
						</div>
						<div class="shop-item-text">
							<div class="shop-item-tag">
								<input type="radio" name="size4" value="L" checked>
								<input type="radio" name="size4" value="M">
								<input type="radio" name="size4" value="S">
							</div>
							<h4>Be the good pink</h4>
							<div class="shop-item-quantity">
								<button onclick="decrement(this)">-</button>
								<p>0</p>
								<button onclick="increment(this)">+</button>
							</div>
							<button onclick="shopATC(this)">Add to cart</button>
						</div>
					</div>
					<div class="shop-item shirt M">
						<div class="shop-item-img">
							<img src="img/shop/btg_blue.png">
						</div>
						<div class="shop-item-text">
							<div class="shop-item-tag">
								<input type="radio" name="size5" value="L" checked>
								<input type="radio" name="size5" value="M">
								<input type="radio" name="size5" value="S">
							</div>
							<h4>Be the good blue</h4>
							<div class="shop-item-quantity">
								<button onclick="decrement(this)">-</button>
								<p>0</p>
								<button onclick="increment(this)">+</button>
							</div>
							<button onclick="shopATC(this)">Add to cart</button>
						</div>
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
