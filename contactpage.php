<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
	// User is logged in, show after-login-navbar.php
	include './NavBar/navbarAfter.php';
} else {
	// User is not logged in, show before-login-navbar.php
	include './NavBar/navbarBefore.php';
}
include './mailsend.php';
if (isset($_POST['email']) && $_POST['email'] != '') {
	sendmail($_POST['email'], $_POST['Name'], $_POST['message']);
}
?>

<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact Us</title>
	<link rel="stylesheet" href="./StyleSheet/contactpage.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./StyleSheet/font.css" />
</head>

<body>
	<div class="container">
		<div class="form">
			<div class="contact-info">
				<div class="title">Your Feedback Matters</div>
				<p class="text">
					Your input is incredibly valuable to us as we strive to continuously
					improve and enhance our offerings.
				</p>
				<img src="./Assets/mail.gif" />
			</div>
			<div class="contact-form">
				<form action="./contactpage.php" method="POST">
					<h3 class="title">Let's get in touch</h3>
					<div class="input-container">
						<input type="text" name="Name" class="input" id="Name" autocomplete="off" required />
						<label name="name" for="Name">Name</label>
						<span>Name</span>
					</div>
					<div class="input-container">
						<input type="email" name="email" class="input" id="Email" autocomplete="off" required />
						<label name="email" for="Email">Email</label>
						<span>Email</span>
					</div>
					<div class="input-container textarea">
						<textarea name="message" class="input" id="message" autocomplete="off" required></textarea>
						<label name="feedback" for="message">Feedback</label>
						<span>Message</span>
					</div>
					<input type="submit" value="Submit" class="btn1" />
				</form>
			</div>
		</div>
	</div>
	<?php include './Footer/footer.php'; ?>
</body>
<script src="./Script/contactpage.js"></script>

</html>