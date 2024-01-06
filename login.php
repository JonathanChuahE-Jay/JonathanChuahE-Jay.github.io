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
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$connection = mysqli_connect("localhost", "root", "", "UHF");

	if (!$connection) {
	    die("Connection failed - <a href='index.html'><u>Click here to go back</u></a>");
	}

	$validation_query = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $validation_query);
    $output = mysqli_fetch_array($result, MYSQLI_BOTH);
	if ($result) {
        if ($output) {
        	$_SESSION['username'] = $username;
            echo "<script>alert('Login successful');</script>";
            echo "<script>window.location.href='home.php';</script>";

        } else {
            echo "<script>alert('Invalid username or password');</script>";
            echo "<script>window.location.href='index.html';</script>";
        }
    } else {
        echo "Error in query: " . mysqli_error($connection). "<a href='index.html'><u>Click here to go back</u></a>";

    }
    ?>

	<script type="text/javascript" src="script.js"></script>
</body>
</html>