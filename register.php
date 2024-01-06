<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UnitedHope Foundation</title>
	<link rel="icon" type="icon" href="img/logo/heartbeat_logo.png">
</head>
<body>
	<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 =$_POST['password2'];
	$tel = $_POST['phone_number'];
	$email = $_POST['email'];
	$event = ",,,";

	if ($password != $password2) {
        echo "<script>alert('Please enter valid password');</script>";
    } else {
        $connection = mysqli_connect("localhost", "root", "", "UHF");
    }
    if (!$connection) {
        die("Connection failed - <a href='index.html'><u>Click here to go back</u></a>");
    }
    $validation_email = "SELECT * FROM customer WHERE email = '$email'";
	$validation_name = "SELECT * FROM customer WHERE username = '$username'";
	$result_name = mysqli_query($connection, $validation_name);
	$result_email = mysqli_query($connection, $validation_email);
	if(mysqli_num_rows($result_name)>0){
		echo("<script>alert('username already in use, please use different username');</script>");
		echo "<script>window.location.href='index.html';</script>";
	}elseif(mysqli_num_rows($result_email)>0){
		echo("<script>alert('Email address already in use, please use different email');</script>");
		echo "<script>window.location.href='index.html';</script>";
	}else{
		$insert = "INSERT into customer (username, password, tel, email,event) VALUES('$username', '$password', '$tel', '$email','$event')";
		mysqli_query($connection,$insert);
		if ($insert) {
        	echo "<script>alert('Register successfully!');</script>";
        	echo "<script>window.location.href='index.html';</script>";
     	} else {
        	echo "<script>alert('Error occur: unable to register!');</script>";
     	}
	}
	
	?>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>