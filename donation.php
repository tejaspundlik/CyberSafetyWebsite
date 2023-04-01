<?php
include './NavBar/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Support Us</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="./StyleSheet/navbar.css" />
	<link rel="stylesheet" href="./StyleSheet/donationPage.css" />
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
	<div class="main">
		<div class="message">
			<img class="image" src="./Assets/donation.jpg" />
			<p>
				We are proudly non-profit, non-corporate and non-compromised.
				Thousands of people like you help us stand up for a safe internet for
				all. We rely on donations to carry out our mission to keep the web
				secure for all.
			</p>
		</div>
		<div class="donation">
			<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="donation-form" target="_blank">
				<div class="donation">
					<h1>Make A Donation</h1>
					<div class="donation-field">
						<p id="willing">I Will Donate $</p>
						<input type="number" name="amount" id="amount" class="amount" step="0.01" min="4.99" value="4.99" required />
					</div>
					<div class="choices">
						<button type="button" class="choice selected" data-amount="4.99">
							<p>$4.99</p>
						</button>
						<button type="button" class="choice" data-amount="9.99">
							<p>$9.99</p>
						</button>
						<button type="button" class="choice" data-amount="14.99">
							<p>$14.99</p>
						</button>

						<button type="button" class="choice" data-amount="19.99">
							<p>Other</p>
						</button>
					</div>

					<div class="cta">
						<button class="button" type="submit">Donate Now</button>
					</div>
					<p class="donation-note">
						You'll be redirected to PayPal to donate.
					</p>
				</div>

				<input type="hidden" name="cmd" value="_donations" />
				<input type="hidden" name="business" value="sb-qyyoc25365716@business.example.com" />
				<input type="hidden" name="item_name" value="One-time Donation" />
				<input type="hidden" name="currency_code" value="USD" />
				<input type="hidden" name="return" value="https://www.postgresqltutorial.com/donation/thankyou.php" />
			</form>
		</div>
	</div>
</body>
<script>
	const MININUM_DONATION = 4.99;
</script>
<script src="./Script/donation.js"></script>

</html>