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
	<link rel="stylesheet" href="./StyleSheet/material5.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./StyleSheet/font.css" />
	<title>Cyber-Attacks</title>
</head>

<body>
	<div class="pagecontainer">
		<div class="division1">
			<h1 class="gradient-text">Cyber-Attacks</h1>
			<div class="container1">
				<h2>Contents:</h2>
				<ul>
					<li><a href="#">Social Engineering Attacks</a></li>
					<li><a href="#section1">DDoS Attack</a></li>
					<li><a href="#section2">MITM Attack</a></li>
					<li><a href="#section3">Brute Force Attack</a></li>
					<li><a href="#section4">DNS Spoofing</a></li>
				</ul>
			</div>
			<img style="width: 100%" src="./Assets/waves.png" id="wave" />
			<div class="container2">
				<div id="section1">
					<h2>Social Engineering Attacks</h2>
					<p>
						Social engineering is the term used for a broad
						range of malicious activities accomplished through
						human interactions. It uses psychological
						manipulation to trick users into making security
						mistakes or giving away sensitive information.
						<br />
					</p>
					<img src="./Assets/studyMaterialAsset3.png" alt="social-engineering" id="img1" />
					<h2>Types of Social Engineering</h2>
					<br />
					<ul style="color: rgb(233, 233, 194)">
						<li>
							<h3>Phishing</h3>
						</li>
						<p>
							As one of the most popular social engineering
							attack types, phishing scams are email and text
							message campaigns aimed at creating a sense of
							urgency, curiosity or fear in victims. It then
							prods them into revealing sensitive information,
							clicking on links to malicious websites, or
							opening attachments that contain malware.
						</p>
						<li>
							<h3>Baiting</h3>
						</li>
						<p>
							As its name implies, baiting attacks use a false
							promise to pique a victim's greed or curiosity.
							They lure users into a trap that steals their
							personal information or inflicts their systems
							with malware.
						</p>
						<li>
							<h3>Spear Phishing</h3>
						</li>
						<p>
							This is a more targeted version of the phishing
							scam whereby an attacker chooses specific
							individuals or enterprises. They then tailor
							their messages based on characteristics, job
							positions, and contacts belonging to their
							victims to make their attack less conspicuous.
							Spear phishing requires much more effort on
							behalf of the perpetrator and may take weeks and
							months to pull off. They're much harder to
							detect and have better success rates if done
							skillfully.
						</p>
						<li>
							<h3>Pretexting</h3>
						</li>
						<p>
							The attacker usually starts by establishing
							trust with their victim by impersonating
							co-workers, police, bank and tax officials, or
							other persons who have right-to-know authority.
							The pretexter asks questions that are ostensibly
							required to confirm the victim's identity,
							through which they gather important personal
							data.
						</p>
					</ul>
					<br />
				</div>
				<div id="section2">
					<h2>DDoS Attack</h2>
					<p>
						DDoS Attack means "Distributed Denial-of-Service
						(DDoS) Attack" and it is a cybercrime in which the
						attacker floods a server with internet traffic to
						prevent users from accessing connected online
						services and sites.
					</p>

					<div class="example-container" style="margin-bottom: 2rem">
						<img src="./Assets/studyMaterialAsset9.png" alt="malware-icon" id="img4" />
						<div class="example_text">
							<h2 style="padding-left: 5%">
								Google DDoS Attack
							</h2>
							<p style="padding-left: 5%">
								IT services downtime costs companies
								anywhere from $300,000 to over $1,000,000
								per hour, you can see that the financial hit
								from even a short DDoS attack could
								seriously damage your bottom line. A recent
								example is The Google Attack, 2020.
							</p>
						</div>
					</div>
					<h2>DDoS vs. DoS</h2>
					<p>
						A distributed denial-of-service attack is a
						subcategory of the more general denial-of-service
						(DoS) attack. In a DoS attack, the attacker uses a
						single internet connection to barrage a target with
						fake requests or to try and exploit a cybersecurity
						vulnerability. DDoS is larger in scale. It utilizes
						thousands (even millions) of connected devices to
						fulfill its goal. The sheer volume of the devices
						used makes DDoS much harder to fight.
					</p>
				</div>
				<div id="section3">
					<h2>Man in the Middle Attack</h2>
					<p>
						A man in the middle (MITM) attack is a general term
						for when a perpetrator positions himself in a
						conversation between a user and an
						application—either to eavesdrop or to impersonate
						one of the parties, making it appear as if a normal
						exchange of information is underway.
					</p>
					<img src="./Assets/studyMaterialAsset11.png" alt="MITM" id="img2" />
				</div>
				<div id="section4">
					<h2>Brute Force Attack</h2>
					<p>
						A brute force attack is a hacking method that uses
						trial and error to crack passwords, login
						credentials, and encryption keys. It is a simple yet
						reliable tactic for gaining unauthorized access to
						individual accounts and organization's systems and
						networks. The hacker tries multiple usernames and
						passwords, often using a computer to test a wide
						range of combinations, until they find the correct
						login information.
					</p>
				</div>
				<div id="section5">
					<h2>DNS Spoofing</h2>
					<p>
						Domain Name Server (DNS) spoofing (a.k.a. DNS cache
						poisoning) is an attack in which altered DNS records
						are used to redirect online traffic to a fraudulent
						website that resembles its intended destination.
					</p>
				</div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/NDcEOW8r0xc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
			<div class="pagination-container">
				<div class="pagination">
					<a href="./material1.php">1</a>
					<a href="./material2.php">2</a>
					<a href="./material3.php">3</a>
					<a href="./material4.php">4</a>
					<a href="./material5.php" class="active">5</a>
					<a href="./material6.php">6</a>
					<a href="./material7.php">7</a>
					<a href="./material8.php">8</a>
					<a href="./material9.php">References</a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>