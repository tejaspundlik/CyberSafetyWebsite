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
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/x-icon" href="./Assets/favicon.png" />
	<link rel="stylesheet" href="./StyleSheet/material2.css" />
	<title>Cyber Security Goals</title>
</head>

<body>
	<div class="pagecontainer">
		<div class="division1">
			<h1 class="gradient-text">Cyber Security Goals</h1>
			<div class="container1">
				<h2>Contents:</h2>
				<ul>
					<li><a href="#">Why are Cyber Security Goals ?</a></li>
					<li><a href="#section1">Confidentiality</a></li>
					<li><a href="#section2">Integrity</a></li>
					<li><a href="#section3">Availability</a></li>
				</ul>
			</div>
			<img style="width: 100%" src="./Assets/waves.png" id="wave" />
			<div class="container2">
				<img src="./Assets/studyMaterialAsset5.png" alt="CIA triad" id="img1" />
				<div id="section1">
					<h2>Why are Cyber Security Goals ?</h2>
					<p>
						The ultimate goal of cybersecurity is to protect the
						information from being stolen or compromised. To
						achieve this we look at 3 fundamental goals of
						cybersecurity.
						<br />
					</p>

					<ul style="color: rgb(233, 233, 194)">
						<li>Protecting the Confidentiality of data</li>
						<li>Preserving the Integrity of data</li>
						<li>
							Restricting the Availability of data only to
							authorized users
						</li>
					</ul>
					<br />
					<p>
						Cyber Security Goals can be classified into 3 main
						categories, namely confidentiality, integrity, and
						availability. This is known as the CIA triad. Learn
						more about them ahead.
					</p>
				</div>
				<div id="section2">
					<h2>Confidentiality</h2>
					<p>
						Confidentiality is probably the most common aspect
						of information security. We need to protect our
						confidential information. An organization needs to
						guard against those malicious actions that endanger
						the confidentiality of its information. In the
						military, concealment of sensitive information is
						the major concern. In industry, hiding some
						information from competitors is crucial to the
						operation of the organization. In banking,
						customers’ accounts need to be kept secret.
					</p>
				</div>
				<div id="section3">
					<h2>Integrity</h2>
					<p>
						Information needs to be changed constantly. In a
						bank, when a customer deposits or withdraws money,
						the balance of her account needs to be changed.
						Integrity means that changes need to be done only by
						authorized entities and through authorized
						mechanisms. Integrity violation is not necessarily
						the result of a malicious act; an interruption in
						the system, such as a power surge, may also create
						unwanted changes in some information.
					</p>
				</div>
				<div id="section4">
					<h2>Availability</h2>
					<p>
						It is always important to keep your data private and
						safe. Cyber-attacks have evolved throughout the
						years to enter your system/ network undetected.
						Thus, it is always important to be upgraded and
						updated on your Cyber Safety system to protect your
						data.
					</p>
				</div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/gx0vlRpdFnc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				<div class="pagination-container">
					<div class="pagination">
						<a href="./material1.php">1</a>
						<a href="./material2.php" class="active">2</a>
						<a href="./material3.php">3</a>
						<a href="./material4.php">4</a>
						<a href="./material5.php">5</a>
						<a href="./material6.php">6</a>
						<a href="./material7.php">7</a>
						<a href="./material8.php">8</a>
						<a href="./material9.php">References</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>