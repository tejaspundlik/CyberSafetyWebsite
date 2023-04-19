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
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
$mail_send = false;
if (isset($_POST['email']) && $_POST['email'] != '') {
	$name = $_POST['Name'];
	$email = $_POST['email'];
	$feedback = $_POST['message'];
	$servername = "sql12.freemysqlhosting.net";
	$username = "sql12608164";
	$password = "eDcWvKrJUv";
	$dbname = "sql12608164";
	$conn = new mysqli(
		$servername,
		$username,
		$password,
		$dbname
	);
	$stmt = $conn->prepare("INSERT INTO user_feedback (email,name,feedback) VALUES (?,?,?)");
	$stmt->bind_param("sss", $email, $name, $feedback);
	$stmt->execute();
	$stmt->close();
	$conn->close();
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host       = 'smtp.gmail.com';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'kjprojects23@gmail.com';
	$mail->Password   = 'taketheL';
	$mail->SMTPSecure = 'ssl';
	$mail->Port       = 465;

	$mail->setFrom($_POST['email']);
	$mail->addAddress('kjprojects23@gmail.com');
	$mail->isHTML(true);
	$mail->Subject = 'Feedback from ' . $_POST['Name'];
	$mail->Body    = $_POST['message'];
	$mail->send();
	$mail_send = true;
	echo '<div class="alert alert-success alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
	<strong>Thank you for your feedback!</strong><hr>We have received your feedback and we are working to resolve it as fast as possible.
	<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>';
}
if ($mail_send == false and $_SERVER['REQUEST_METHOD'] == 'POST') {
	echo '<div class="alert alert-danger alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
	<strong>Oops! Something went wrong</strong><hr>It\'s not you it\'s us and we are working to resolve it as fast as possible.
	<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>';
}*/
?>

<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact Us</title>
	<link rel="stylesheet" href="./StyleSheet/contactpage.css" />
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