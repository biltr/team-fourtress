<?php
	session_start();
	
	include_once('inc/connection.inc.php');
			
?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Team Fourtress Productions</title>
		<meta name="description" content="Team Fourtress Productions">
		<meta name="author" content="Team Fourtress">
		<link rel="stylesheet" href="aston_event.css">
	</head>
	<body id="home-background">
		<!-- Navigation Bar -->
		<nav class="navbar">
			<img class="logo" src="resources/logo.jpg"></img>
			<a class="active" href="index.php">Home</a>
			<a href="event_list.php">Blog</a>
		</nav>
		<!-- End of Navigation Menu -->
		
			<div class="container">
				
				<!-- Main Content -->
				<div class="main">
						<h1>WELCOME TO TEAM FOURTRESS PRODUCTIONS <?php echo ucfirst($_SESSION['forename'])?> !</h1><br>
						<?php if(isset($_SESSION['userID'])){
						?>
							<p>Aston Events is a hub to find out all about the latest events from Apple Picking to a good old Karaoke sing along!</p>
							<p>Register now and get involved.</p>
							<input onclick="location.href='signout.php';" type="button" class="button" value="Sign Out">
						<?php } else {	
						?>	
							<p>Aston Events is a hub to find out all about the latest events from Apple Picking to a good old Karaoke sing along!
							<p>Register now and get involved. Already a member? Then just hit the sign in and get started!</p>
							<input onclick="location.href='register.php';" type="button" class="button" value="Register">
							<input onclick="location.href='signin.php';" type="button" class="button" value="Sign In">
						<?php
						}
						?>
				</div>
			</div>

	</body>
</html>