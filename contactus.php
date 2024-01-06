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
	$firstname =$_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$connection = mysqli_connect("localhost","root","","uhf");
	$insert = "INSERT into user (first_name, last_name,email,message) VALUES ('$firstname','$lastname','$email','$message')";

	$output = mysqli_query($connection,$insert);

	if(!$connection){
		die("Connection failed - <a href='index.html'><u>Click here to go back</u></a>");
	}
	if($output){
		echo "<script>alert('Thank you for your feedback!');</script>";
        echo "<script>window.location.href='contact.php';</script>";
	}else{
		echo "<script>alert('Error: unable to send feedback!');</script>";
	}
	?>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>