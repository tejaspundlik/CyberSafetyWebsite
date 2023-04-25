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
	<link rel="stylesheet" href="./StyleSheet/passchecker.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./StyleSheet/font.css" />
	<title>Password Checker</title>
</head>

<body>
	<div class="page-container">
		<div class="division1">
			<div class="passbox">
				<img src="./Assets/shield.gif" width="120px" alt="shield icon" />
				<h1 style="color: white">Password Checker</h1>
				<form>
					<label for="password">Enter your password:</label>
					<input type="password" id="password" name="password" onkeyup="checkPasswordStrength()" />
					<div class="result" id="result"></div>
				</form>
			</div>
		</div>
		<div class="sectiondivider1">
			<img src="./Assets/passwordPageDivider.svg" width="100%" />
		</div>
		<div class="division2">
			<br />
			<h1>What is strong password ?</h1>
			<p>
				A strong password is one that is designed to be hard for a person or
				program to guess. It is a measure of the effectiveness of a password
				against guessing or brute-force attacks. In its usual form, it
				estimates how many trials an attacker who does not have direct access
				to the password would need, on average, to guess it correctly. Instead
				of common words that are easy to guess, essential components of a
				secure password include sufficient length and a mix of special
				characters, numbers, and uppercase and lowercase letters.
			</p>
			<h1>Why do you need a strong password ?</h1>
			<p>
				Passwords provide the first line of defense against unauthorized
				access to your computer and personal information. Creating a strong
				and secure password can reduce the risk of cybercriminals guessing
				your password and accessing sensitive data. Compromised passwords
				caused 80% of all data breaches in 2019, resulting in financial losses
				for both businesses and consumers
			</p>
			<h1>How to remember your password ?</h1>
			<p>
				People like to use passwords that will be easy for them to remember,
				so an easy way to create a new password that is both secure and easy
				to remember is to use a common passphrase and convert that phrase to a
				password. So a password example might be, "I have 2 Labrador
				retrievers! Fido and Spot," which could be expressed as Ih2Lr!F+S.
			</p>
			<br />
		</div>
		<div class="division3">
			<div class="password-generator">
				<div class="leftbox">
					<img class="lock" src="./Assets/passwordGenBox.png" width="50%" />
				</div>
				<div class="rightbox">
					<h1>Generate a Strong Password</h1>
					<div>
						<input type="text" id="password2" readonly />
						<button class="button2" onclick="generatePassword()">
							Generate
						</button>
						<br />
						<h2 style="color: white; font-size: 24px">
							Select the length of the password:
						</h2>
						<div clas="slider">
							<input type="range" min="8" max="16" value="16" class="range-slider" id="slider" style="padding:0" />
							<label for="minimum">8</label>
							<label for="maximum" class="label-right" id="slider-label-right"></label>
						</div>
					</div>
				</div>
				<div class="diamond"></div>
				<br />
			</div>
			<br />
		</div>
	</div>
	<?php include './Footer/footer.php'; ?>
	<script>
		var slider = document.querySelector("#slider");
		var slider_right = document.querySelector("#slider-label-right");
		slider_right.innerHTML = slider.value;
		var length = 16;
		slider.style.background =
			"linear-gradient(90deg, #522056 100%, #ddd 100%)";
		var slider_percent = ((slider.value - 8) / 8) * 100;
		slider.oninput = function() {
			slider_percent = ((slider.value - 8) / 8) * 100;
			slider_percent = parseInt(slider_percent);
			slider_right.innerHTML = slider.value;
			slider.style.background =
				"linear-gradient(90deg, #522056 " +
				slider_percent +
				"%, #ddd " +
				slider_percent +
				"%)";
			length = slider.value;
		};

		function checkPasswordStrength() {
			var password = document.getElementById("password").value;
			var result = document.getElementById("result");

			if (
				password.length >= 8 &&
				/[a-z]/.test(password) &&
				/[A-Z]/.test(password) &&
				/[0-9]/.test(password) &&
				/[^a-zA-Z0-9]/.test(password)
			) {
				result.textContent = "Strong password";
				result.className = "result strong";
			} else if (
				password.length >= 6 &&
				/[a-z]/.test(password) &&
				/[A-Z]/.test(password) &&
				/[0-9]/.test(password)
			) {
				result.textContent = "Medium strength password";
				result.className = "result medium";
			} else {
				result.textContent = "Weak password";
				result.className = "result weak";
			}
		}

		function generatePassword() {
			var lowercase = "abcdefghijklmnopqrstuvwxyz";
			var uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			var numbers = "0123456789";
			var specials = "!@#$%&*_";
			var charset = lowercase + uppercase + numbers + specials;
			var password = "";
			password += lowercase.charAt(
				Math.floor(Math.random() * lowercase.length)
			);
			password += uppercase.charAt(
				Math.floor(Math.random() * uppercase.length)
			);
			password += numbers.charAt(Math.floor(Math.random() * numbers.length));
			password += specials.charAt(
				Math.floor(Math.random() * specials.length)
			);
			for (var i = 4, n = charset.length; i < length; ++i) {
				password += charset.charAt(Math.floor(Math.random() * n));
			}
			document.getElementById("password2").value = password;
		}
	</script>
</body>

</html>