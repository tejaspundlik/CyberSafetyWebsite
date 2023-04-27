<?php
session_start();
echo '<title>Cyber Safety Awareness</title>';
echo '<link rel="icon" type="image/x-icon" href="./Assets/icon.ico">';
include './NavBar/navbarBefore.php';
if (isset($_POST['email']) && $_POST['email'] != '') {
	$mail = $_POST['email'];
	$formpassword = $_POST['password'];
	$servername = "sql12.freemysqlhosting.net";
	$username = "sql12608164";
	$password = "eDcWvKrJUv";
	$dbname = "sql12608164";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? and userpassword = ?");
	$stmt->bind_param("ss", $mail, $formpassword);
	$stmt->execute();
	$result = $stmt->get_result();
	$num_rows = mysqli_num_rows($result);
	if ($result && $num_rows >= 1) {
		$_SESSION['loggedIn'] = true;
		$stmt->close();
		$conn->close();
		header('Location:./homepage.php');
	} else {
		echo '<div class="alert alert-danger alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
			<strong>Oops!</strong><hr>Your Email-Id Or Password Is Wrong.
			<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
	}
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
	<link rel="stylesheet" href="./StyleSheet/forgotPasswordPage.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./StyleSheet/font.css" />
</head>

<body>
	<div class="signin" style="margin-bottom:5rem;margin-top:5rem;">
		<div class="left">
			<img src="./Assets/forgotPass.png" />
			<p>Enter Your Email ID to Recieve Your Password</p>
		</div>
		<div class="right">
			<h1>Forgot Password ?</h1>
			<form action="" method="post">
				<input type="email" id="email" name="email" required placeholder="Email" autocomplete="off" /><br />
				<input type="submit" value="Continue" />
			</form>
		</div>
	</div>
	<?php include './Footer/footer.php'; ?>
</body>

</html>