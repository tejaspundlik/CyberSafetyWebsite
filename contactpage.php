<?php
include './NavBar/navbar.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['email']) && $_POST['email'] != '') {
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host       = 'smtp.gmail.com';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'kjprojects23@gmail.com';
	$mail->Password   = 'zstnsitmqzmdmsky';
	$mail->SMTPSecure = 'ssl';
	$mail->Port       = 465;

	$mail->setFrom($_POST['email']);
	$mail->addAddress('kjprojects23@gmail.com');
	$mail->isHTML(true);
	$mail->Subject = 'Feedback from ' . $_POST['Name'];
	$mail->Body    = $_POST['message'];
	$mail->send();
}
?>

<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact Us</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
	<link rel="stylesheet" href="./StyleSheet/contactpage.css" />
	<link rel="stylesheet" href="./StyleSheet/navbar.css" />
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
						<input type="text" name="Name" class="input" id="Name" autocomplete="off" />
						<label name="name" for="Name">Name</label>
						<span>Name</span>
					</div>
					<div class="input-container">
						<input type="email" name="email" class="input" id="Email" autocomplete="off" />
						<label name="email" for="Email">Email</label>
						<span>Email</span>
					</div>
					<div class="input-container textarea">
						<textarea name="message" class="input" id="message" autocomplete="off"></textarea>
						<label name="feedback" for="message">Feedback</label>
						<span>Message</span>
					</div>
					<input type="submit" value="Submit" class="btn1" />
				</form>
			</div>
		</div>
	</div>
</body>
<script src="./Script/contactpage.js"></script>

</html>