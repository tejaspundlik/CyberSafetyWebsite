<?php
session_start();
if (isset($_POST['email']) && $_POST['email'] != '') {
	$mail = $_POST['email'];
	$formpassword = $_POST['password'];
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
	$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? and userpassword = ?");
	$stmt->bind_param("ss", $mail, $formpassword);
	$stmt->execute();
	$result = $stmt->get_result();
	$num_rows = mysqli_num_rows($result);
	if ($result && $num_rows >= 1) {
		echo "<script>alert('Valid email or password! You will now be redirected');</script>";
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="./StyleSheet/navbar.css" />
	<link rel="stylesheet" href="./notfinalSignIn.css" />
</head>

<body>
	<nav class="navbar navbar-expand-xl fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="./homepage.html">
				<img width="15%" style="margin-left: 1rem" src="./Assets/homeicon.png" />
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent" style="max-width: 65%">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<div class="navicon">
								<img src="./Assets/virus.gif" width="25.5%" />
								<p>Virus Checker</p>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<div class="navicon">
								<img src="./Assets/lock.gif" width="24.5%" />
								<p>Password Tester</p>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./reviewpage.html">
							<div class="navicon">
								<img src="./Assets/recommend.gif" width="28.5%" />
								<p>Products</p>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contactpage.html">
							<div class="navicon">
								<img src="./Assets/location.gif" width="27.5%" />
								<p>Contact Us</p>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="signin">
		<h1>Sign In</h1>
		<form action="" method="post">
			<input type="email" id="email" name="email" required placeholder="Email" autocomplete="off" /><br />
			<input id="password" name="password" required placeholder="Password" autocomplete="off" /><br />
			<input type="submit" value="Sign In" />
		</form>
	</div>
</body>

</html>