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
	$username = $_SESSION['username'];

	// data
	$oldPassword = $_POST['password'];
	$password = $_POST['newpassword'];
	$confirmPassword = $_POST['confirmnewpassword'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];

	$event1 = $_POST['event1'];
    $event2 = $_POST['event2'];
    $event3 = $_POST['event3'];
    $event4 = $_POST['event4'];
    

    $selectedEvents = $event1. "," . $event2. "," .$event3. "," .$event4;

	// connection
	$connection = mysqli_connect("localhost","root","","uhf");
	if(!$connection){
		die("Connection failed - <a href='profile.php'><u>Click here to go back</u></a>");
	}

	//select
	$select_email = "SELECT * FROM customer WHERE email = '$email' AND username != '$username'";
    $select_tel = "SELECT * FROM customer WHERE tel = '$tel' AND username != '$username'";

	// output validation
	$email_validation = mysqli_query($connection,$select_email);
	$tel_validation = mysqli_query($connection,$select_tel);

	//validation 
	if (!empty($_POST['password'])) {
		$select_password = "SELECT password FROM customer WHERE username = '$username'";
		$oldPassword_result  = mysqli_query($connection,$select_password);
		$oldPassword_validation = mysqli_fetch_array($oldPassword_result,MYSQLI_BOTH);
	   	if($oldPassword != $oldPassword_validation['password']){
		echo("<script>alert('Incorrect old password. Please try again.');</script>");
		echo "<script>window.location.href='profile.php';</script>";
		exit;
		}
		$update_pass = "UPDATE customer SET password = '$password' WHERE username = '$username'";
		$update_pass_output = mysqli_query ($connection,$update_pass);
	}
		
		if(mysqli_num_rows($tel_validation)>0){
			echo("<script>alert('The telephone number is already in use. Please use a different number.');</script>");
			echo "<script>window.location.href='profile.php';</script>";
		}elseif(mysqli_num_rows($email_validation)>0){
			echo("<script>alert('Email address already in use, please use different email');</script>");
			echo "<script>window.location.href='profile.php';</script>";
		}else{
			// update
			$update = "UPDATE customer SET tel = '$tel', event = '$selectedEvents', email = '$email' WHERE username = '$username'";
			$update_output = mysqli_query($connection,$update);
			if(!$update_output){
				echo "<script>alert('Error when updating');</script>";
				echo "<script>window.location.href='profile.php';</script>";
			}else{
				echo "<script>alert('Profile successfully updated');</script>";
				echo "<script>window.location.href='profile.php';</script>";
				

			}

		}
	
	?>
		
	<script type="text/javascript" src="script.js"></script>
</body>
</html>