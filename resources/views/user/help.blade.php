<!DOCTYPE html>
<html>
<head>
	<title> Help</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<nav>
			<a href="#">Home</a>
			<a href="#">Explore</a>
			<a href="#">Profile</a>
		</nav>
	</header>
	<main>
	<?php

date_default_timezone_set('Asia/Kolkata');
$datetime = date('Y-m-d H:i:s');
echo "Current date and time in India: " . $datetime;
?>

		<h1>Help Center</h1>
		<form action="help.php" method="get">
			<label for="search">Search Help Articles:</label>
			<input type="text" id="search" name="search" placeholder="Enter keywords...">
			<button type="submit">Search</button>
		</form>
		<section>
			<h2>Account Settings</h2>
			<p>Learn how to change your profile picture, edit your bio, and manage your account privacy settings.</p>
			<a href="#">Read More</a>
		</section>
		<section>
			<h2>Privacy and Safety</h2>
			<p>Find out how to control who can see your content, report abusive behavior, and protect your account from hacking attempts.</p>
			<a href="#">Read More</a>
		</section>
		<section>
			<h2>Reporting a Problem</h2>
			<p>If you're experiencing technical issues or have a question about using Instagram, our support team is here to help.</p>
			<from>
			<label for="text-input">Enter your text:</label>
		<input type="text" id="text-input" name="text-input">
		<br>
		<input type="submit" value="help">
</from></section>
	</main>
	<footer>
		<nav>
			<a href="#">Terms of Use</a>
			<a href="#">Privacy Policy</a>
			<a href="#">Help Center</a>
		</nav>
		<p>&copy; 2023 Social media handler, Inc. All rights reserved.</p>
	</footer>
</body>
</html>
