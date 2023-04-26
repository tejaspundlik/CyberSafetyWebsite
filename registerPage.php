<?php
session_start();
if (isset($_POST['email']) && $_POST['email'] != '') {
	$mail = $_POST['email'];
	$formpassword = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
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
	$stmt = $conn->prepare("INSERT INTO users (email,fname,lname,userpassword) values(?,?,?,?)");
	$stmt->bind_param("ssss", $mail, $fname, $lname, $formpassword);
	try {
		$stmt->execute();
		header('Location:./homepage.php');
	} catch (Exception $e) {
		echo '<div class="alert alert-danger alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
			<strong>Oops! You Have Already Registered with us</strong><hr>It seem\'s that you already have an account with us.
			<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
	}
}
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
$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Review Page</title>
	<link rel="stylesheet" href="./StyleSheet/signRegister.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./StyleSheet/font.css" />
</head>

<body>
	<div class="signin" style="margin-bottom:4rem">
		<div class="left">
			<img src="./Assets/register.jpg" />
			<p>When You Register you Get Access To More Features Such As Our Virus Checker Tool Which Helps You To Identify If Any Of Your File Has Virus And Our Curated List Of Products That We Recommend</p>
		</div>
		<div class="right">
			<h1>Register</h1>
			<form action="" method="post">
				<input type="text" id="fname" name="fname" required placeholder="First Name" autocomplete="off" /><br />
				<input type="text" id="lname" name="lname" required placeholder="Last Name" autocomplete="off" /><br />
				<input type="email" id="email" name="email" required placeholder="Email" autocomplete="off" /><br />
				<input id="password" type="password" name="password" required placeholder="Password" autocomplete="off" /><br />
				<input type="submit" value="Register" />
			</form>
		</div>
	</div>
	<?php include './Footer/footer.php'; ?>
</body>

</html>