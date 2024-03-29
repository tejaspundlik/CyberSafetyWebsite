<?php
session_start();
if (isset($_POST['email']) && $_POST['email'] != '') {
	$mail = $_POST['email'];
	$formpassword = $_POST['password'];
	$servername = "sql12.freemysqlhosting.net";
	$username = "sql12608164";
	$password = "eDcWvKrJUv";
	$dbname = "sql12608164";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$hash = md5($formpassword);
	$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? and userpassword = ?");
	$stmt->bind_param("ss", $mail, $hash);
	$stmt->execute();
	$result = $stmt->get_result();
	$num_rows = mysqli_num_rows($result);
	if ($result && $num_rows >= 1) {
		$_SESSION['loggedIn'] = true;
		$stmt->close();
		$conn->close();
		header('Location:./homepage.php');
	}
	$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
	$stmt->bind_param("s", $mail);
	$stmt->execute();
	$result = $stmt->get_result();
	$num_rows = mysqli_num_rows($result);
	$stmt->close();
	$conn->close();
	if ($num_rows == 1) {
		echo '<div class="alert alert-danger alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
			<strong>Oops!</strong><hr>Your Email-Id Is Correct But Password Is Wrong
			<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
	} else {
		echo '<div class="alert alert-danger alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
			<strong>Oops!</strong><hr>You Haven\'t Registered With Us Yet
			<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
	}
}
echo '<title>Cyber Safety Awareness</title>';
echo '<link rel="icon" type="image/x-icon" href="./Assets/icon.ico">';
include './NavBar/navbarBefore.php';
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
	<div class="center">
		<div class="signin" style="margin-bottom:5rem;margin-top:5rem;">
			<div class="left">
				<img src="./Assets/signin.jpg" />
				<p>Sign-In To Access All The Features Available To You Such As The File Scanner And The Curated Product Recomendations</p>
			</div>
			<div class="right">
				<h1 style="margin-top:4rem">Sign In</h1>
				<form action="" method="post">
					<input type="email" id="email" name="email" required placeholder="Email" autocomplete="off" /><br />
					<input id="password" name="password" type="password" required placeholder="Password" autocomplete="off" /><br />
					<input type="submit" value="Sign In" />
				</form>
				<a href="./registerPage.php">
					<p>Register Here</p>
				</a>
				<a href="./forgotPasswordPage.php">
					<p>Forgot Password?</p>
				</a>
			</div>
		</div>
	</div>
	<?php include './Footer/footer.php'; ?>
</body>

</html>