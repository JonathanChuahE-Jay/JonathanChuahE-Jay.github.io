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
	$event1 = $_POST['UCE1'];
    $event2 = $_POST['UCE2'];
    $event3 = $_POST['UCE3'];
    $event4 = $_POST['UCE4'];

	$username = $_SESSION['username'];
	$connection = mysqli_connect("localhost","root","","uhf");

	$selectedEvents = $event1 . ',' . $event2 . ',' . $event3 . ',' . $event4;

	$update = "UPDATE customer SET event = '$selectedEvents' WHERE username = '$username'";
	$output = mysqli_query($connection,$update);
	if ($output) {
        echo "<script>alert('Events updated successfully');</script>";
        echo "<script>window.location.href='home.php';</script>";
    } else {
        echo "<script>alert('Error updating events');</script>";
    }
	?>
		
	<script type="text/javascript" src="script.js"></script>
</body>
</html>