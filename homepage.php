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
	<link rel="stylesheet" href="./StyleSheet/homepage.css" />
	<title>Are you Cyber Safe?</title>
</head>

<body>
	<div class="division1">
		<div class="headcontainer" style="display: flex">
			<div class="blobtext-container">
				<h1 class="cyberheading">Cyber Safety</h1>
				<h1 class="awareheading">Awareness</h1>
			</div>
			<div class="graph-container">
				<h1 style="text-align: center; margin-top: 10%">
					Are you cyber safe ?
				</h1>
				<br />
				<img src="./Assets/graph.png" height="70%" width="70%" />
			</div>
		</div>
		<h1>What is cyber safety ?</h1>
		<p>
			Cyber Safety is to be safe on the internet and is the act of
			maximizing a user's awareness of personal safety and security
			risks to private information and property associated with using
			the internet, and the self-protection from computer crime
		</p>
		<img style="width: 100%" src="./Assets/waves.png" />
	</div>
	<div class="division2">
		<h1>What are Cyber Threats ?</h1>
		<p>
			A cyber or cybersecurity threat is a malicious act that seeks to
			damage data, steal data, or disrupt digital life in general.
			Cyber threats include computer viruses, data breaches, Denial of
			Service (DoS) attacks, and other attack vectors. Cyber threats
			also refer to the possibility of a successful cyber attack that
			aims to gain unauthorized access, damage, disrupt, or steal an
			information technology asset, computer network, intellectual
			property, or any other form of sensitive data. Cyber threats can
			come from within an organization by trusted users or from remote
			locations by unknown parties.
		</p>
		<h1>Uhh ... in English ?</h1>
		<p>
			Lets illustrate this with a few examples. An attacker can phish
			you into giving them your login information. With your login
			information, they may harm your account or use your data. UPI
			scams, viruses like Morris Worm, nimda, ILOVEYOU, trojans etc
			are also some examples of a threat. A popular example is in the
			2020 pandemic, a lot of webcams were hacked.
		</p>
		<h1>So, How can I be safe in the digital age ?</h1>
		<p>Don't worry, we've got you covered.</p>
		<div class="cardscontainer">
			<div class="cards"></div>
			<div class="cards"></div>
			<div class="cards"></div>
		</div>
	</div>
	<div class="division3">
		<h1>Take this quiz to test your knowledge</h1>
		<p>
			Take this quiz after you have read all the topic given in the
			cards above this will let you know what knowledge you have
			gained
		</p>
		<div style="max-width: 18rem; margin: 0 auto 0 auto">
			<a href="./quiz.php">
				<button class="button">
					<p>Click Here to test your knowledge</p>
				</button>
			</a>
		</div>
	</div>
	<footer>
		<?php include './Footer/footer.php'; ?>
	</footer>
</body>

</html>