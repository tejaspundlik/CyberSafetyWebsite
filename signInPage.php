<?php
session_start();
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
		//echo "<script>alert('Valid email or password! You will now be redirected');</script>";
	} else {
		echo "<script>alert('Invalid email or password!');</script>";
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
	<link rel="stylesheet" href="./StyleSheet/signRegister.css" />
</head>

<body>
	<div class="signin" style="margin-bottom:5rem;margin-top:5rem;">
		<div class="left">
			<img src="./Assets/signin.jpg" />
			<p>Sign-In To Access All The Features Available To You Such As The File Scanner And The Curated Product Recomendations</p>
		</div>
		<div class="right">
			<h1>Sign In</h1>
			<form action="" method="post">
				<input type="email" id="email" name="email" required placeholder="Email" autocomplete="off" /><br />
				<input id="password" name="password" required placeholder="Password" autocomplete="off" /><br />
				<input type="submit" value="Sign In" />
			</form>
			<a href="./registerPage.php">
				<p>Register Here</p>
			</a>
		</div>
	</div>
	<?php include './Footer/footer.php'; ?>
</body>

</html>