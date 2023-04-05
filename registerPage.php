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
	$stmt->execute();
	//header("Location:./registration.php");
	$stmt->close();
	$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Review Page</title>
	<link rel="stylesheet" href="./StyleSheet/signRegister.css" />
</head>

<body>
	<div class="signin">
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
				<input id="password" name="password" required placeholder="Password" autocomplete="off" /><br />
				<input type="submit" value="Register" />
			</form>
		</div>

	</div>
</body>

</html>