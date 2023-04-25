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
	<link rel="stylesheet" href="./StyleSheet/material1.css" />
	<link rel="stylesheet" href="./StyleSheet/font.css" />
	<title>Cyber Safety</title>
</head>

<body>
	<div class="pagecontainer">
		<div class="division1">
			<h1 class="gradient-text">Cyber Safety</h1>
			<div class="container1">
				<h2>Contents:</h2>
				<ul>
					<li>
						<a href="#section1">Why is Cyber Safety Important</a>
					</li>
					<li><a href="#section2">Types of Cyber Attacks</a></li>
					<li><a href="#section3">Cyber Safety Tips</a></li>
					<li><a href="#section4">Conclusion</a></li>
				</ul>
			</div>
			<img style="width: 100%" src="./Assets/waves.png" id="wave" />
			<div class="container2">
				<div id="section1">
					<h2>Why is Cyber Safety Important?</h2>
					<p>
						One of the prime reasons for implementing Cyber
						Safety is the protection of confidential data. Cyber
						Safety can protect these data to a great extent.
						These data protection go a long way, especially in
						cases of government-related data. Breach of such
						data of national importance can cause serious
						disturbance to the nation.<br /><br />
						Additionally, a breach of personal data would result
						in personal losses such as reputation damage, etc.
						There are high chances of an extortion threat. By
						giving in to the threat, there are chances of
						financial damages. <br />
						<br />
						Data privacy is important in this digital world. For
						example, breach of personally identifiable
						information (PII), intellectual property, and
						protected health information (PHI) would make people
						lose faith in the service and the possibility of
						recovering lost customers or building faith again is
						a herculean task. This is usually applicable in the
						sectors of hospitals and other healthcare
						institutions, financial service programs, and power
						plants. <br /><br />
						However, the most fearsome aspect of the data breach
						through any cyberattack is the mishandling of data.
						Through the following segment, you will understand
						the various types of cyber attacks. Based on the
						understanding of cyber-attacks and why cyber safety
						is important, you can implement cyber safety
						measures accordingly.
					</p>
				</div>

				<div id="section2" style="overflow-x:hidden">
					<img src="./Assets/studyMaterialAsset1.png" alt="virus" id="img1" />
					<img src="./Assets/studyMaterialAsset2.png" alt="identity-theft" id="img2" />
					<img src="./Assets/studyMaterialAsset3.png" alt="identity-theft" id="img3" />
					<h2>Types of Cyber Attacks</h2>

					<ul>
						<li>
							<h3>Malware</h3>
						</li>
						<p>
							Malware, or malicious software, is any program
							or file that is intentionally harmful to a
							computer, network or server. Types of malware
							include computer viruses, worms, Trojan horses,
							ransomware and spyware. These malicious programs
							steal, encrypt and delete sensitive data alter
							or hijack core computing functions and monitor
							end users' computer activity. Learn more about
							malware <a href="./material4.html">here</a>.
						</p>

						<li>
							<h3>Identity Theft</h3>
						</li>
						<p>
							Identity theft occurs when criminals steal a
							victim's personal information to commit criminal
							acts. Using this stolen information, a criminal
							takes over the victim's identity and conducts a
							range of fraudulent activities in their name.
						</p>
						<li>
							<h3>Social Engineering Attack</h3>
						</li>
						<p>
							Social engineering is the term used for a broad
							range of malicious activities accomplished
							through human interactions. It uses
							psychological manipulation to trick users into
							making security mistakes or giving away
							sensitive information. Social engineering
							attacks happen in one or more steps.
							<br /><br />A perpetrator first investigates the
							intended victim to gather necessary background
							information, such as potential points of entry
							and weak security protocols, needed to proceed
							with the attack. Then, the attacker moves to
							gain the victim's trust and provide stimuli for
							subsequent actions that break security
							practices, such as revealing sensitive
							information or granting access to critical
							resources. <br />
							<br />
							Types of social engineering attacks include
							baiting, phishing, vishing, etc. Learn more
							about social engineering attacks
							<a href="./material5.html">here</a>
						</p>
						<li>
							<h3>SQL Injection Attacks</h3>
						</li>
						<p>
							Structured Query Language (SQL) injection is a
							common method of taking advantage of websites
							that depend on databases to serve their users.
							Clients are computers that get information from
							servers, and an SQL attack uses an SQL query
							sent from the client to a database on the
							server. The command is inserted, or “injected”,
							into a data plane in place of something else
							that normally goes there, such as a password or
							login. The server that holds the database then
							runs the command and the system is penetrated.
						</p>
					</ul>
				</div>

				<div id="section3">
					<div>
						<h2>Cyber Safety Tips</h2>
						<ul>
							<li>
								<p>
									Create a strong password for all
									platforms. Try to create unique
									passwords. Most importantly, the
									passwords are not related at all. In
									this way, hackers will not succeed in
									their password guessing methodology.
								</p>
							</li>
							<li>
								<p>
									Take regular, full back ups with
									rotation offsite. Take cloud back ups
									with versioning turned on and make sure
									external hard drives are only plugged in
									when backing up.
								</p>
							</li>
							<li>
								<p>
									A firewall is your first line of defense
									against any attack
								</p>
							</li>
							<li>
								<p>
									Use an anti-virus software. The free
									stuff is great, just make sure its
									enabled and updated.
								</p>
							</li>
							<li>
								<p>
									Keep updating ! Especially if you are
									using flash or java
								</p>
							</li>
							<li>
								<p>Exercise caution and be aware</p>
							</li>
							<li>
								<p>
									Only open email attachments/click on
									links if you are expecting them.
								</p>
							</li>
							<li>
								<p>
									Always turn on two-factor authentication
									on your social media platforms. In that
									way, you will be alerted whenever there
									is an attempt to access your account.
								</p>
							</li>
							<li>
								<p>
									Never type your financial information on
									any site, especially, if the site lacks
									padlock on the page
								</p>
							</li>
						</ul>
					</div>
					<img src="./Assets/studyMaterialAsset4.svg" alt="notes" id="img4" />
				</div>
				<div id="section4">
					<h2>Conclusion</h2>
					<p>
						It is always important to keep your data private and
						safe. Cyber-attacks have evolved throughout the
						years to enter your system/ network undetected.
						Thus, it is always important to be upgraded and
						updated on your Cyber Safety system to protect your
						data.
					</p>
					<br />
				</div>
				<div class="pagination-container">
					<div class="pagination">
						<a href="./material1.php" class="active">1</a>
						<a href="./material2.php">2</a>
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