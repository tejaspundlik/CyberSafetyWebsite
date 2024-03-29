<?php
session_start();
echo '<title>Cyber Safety Awareness</title>';
echo '<link rel="icon" type="image/x-icon" href="./Assets/icon.ico">';
// Check if the user is logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
	// User is logged in, show after-login-navbar.php
	include './NavBar/navbarAfter.php';
} else {
	// User is not logged in, show before-login-navbar.php
	include './NavBar/navbarBefore.php';
}
if (isset($_POST['name']) != '' and isset($_POST['email']) != '') {
	$name = $_POST['name'];
	$email = $_POST['email'];
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
	$stmt = $conn->prepare("INSERT IGNORE INTO newsletter_members (email, name) VALUES (?, ?)");
	$stmt->bind_param("ss", $email, $name);
	$stmt->execute();
	$stmt->close();
	$conn->close();
	echo '<div class="alert alert-success alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
			<strong>Success!</strong><hr>You Have Succesfully Registered With Us
			<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Support Us</title>
	<link rel="stylesheet" href="./StyleSheet/newsletterPage.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./StyleSheet/font.css" />
</head>

<body>
	<div class="main">
		<div class="message">
			<img class="image" src="./Assets/newsletter.jpg" />
			<p>
				With cyber threats becoming more and more sophisticated, it is crucial
				to stay informed and educated about the latest trends in cybercrime
				and cyber safety measures. By joining our newsletter, subscribers will
				receive regular updates on the latest cyber security news, trends, and
				best practices, as well as exclusive content, such as expert insights,
				interviews, and how-to guides, to help them stay safe online.
			</p>
		</div>
		<div class="donation">
			<form action="" method="post">
				<p>Enter your name</p>
				<input type="text" id="name" name="name" required autocomplete="off" />
				<p>Enter your E-Mail address</p>
				<input type="email" id="email" name="email" required autocomplete="off" />
				<button type="submit" class="donationbutton">Subscribe</button>
			</form>
		</div>
	</div>
	<?php include './Footer/footer.php'; ?>
</body>

</html>