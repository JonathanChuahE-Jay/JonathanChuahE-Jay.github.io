<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UnitedHope Foundation</title>
	<link rel="icon" type="icon" href="img/logo/heartbeat_logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script_before.js"></script>
</head>
<body>
	<?php
	session_start();
	if($username = $_SESSION['username']){
		session_destroy();
		echo "
		<script>
		alert('Sucessfully logged out');
		window.location.href = 'index.html';
		</script>
		";	
	}else{
		echo "<script>
		alert('Failed to logged out');
		window.location.href = 'index.html';
		</script>";
	}
	
	?>
		
	<script type="text/javascript" src="script.js"></script>
</body>
</html>