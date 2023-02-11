<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./styles.css" />
	<title>Are you Cyber Safe?</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="./homepage.php">
				<p class="navicon">Cyber Safety</p>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent" style="max-width: 65%">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<p class="navicon">
								<img src="./Assets/lock.gif" width="30%" />
								Password Tester
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<p class="navicon">
								<img src="./Assets/virus.gif" width="32%" />
								Virus Checker
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<p class="navicon">
								<img src="./Assets/recommend.gif" width="32%" />
								Products
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contactpage.php">
							<p class="navicon">
								<img src="./Assets/location.gif" width="30%" />
								Contact Us
							</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page_container">
		<div class="head_container">
			<h1 class="gradient_text">Cyber Safety</h1>
			<h1 style="font-size: max(3vw, 25px); color: azure">Awareness</h1>
		</div>
		<div class="cont2">
			<div class="quizbutton">
				<h2 style="color: azure; font-size: 2.5vw; font-style: oblique">
					Are you cyber safe ?
				</h2>
				<a href="./quiz.php"><button class="button but1">Quiz</button></a>
			</div>
			<p id="bruh" style="color: rgb(116, 116, 116)">
				Take this quiz to find out
			</p>
			<br />
			<br />
			<h3 style="color: azure; font-size: 2.5vw">What is cyber safety ?</h3>
			<p style="color: #a7a7a7">
				Cyber Safety is to be safe on the internet and is the act of
				maximizing a user's awareness of personal safety and security risks to
				private information and property associated with using the internet,
				and the self-protection from computer crime
			</p>
		</div>
		<br />
		<br />
		<br />
		<br />
		<div class="cont3">
			<h3 style="color: azure; font-size: 2.5vw">What are Cyber Threats ?</h3>
			<p style="color: #a7a7a7">
				A cyber or cybersecurity threat is a malicious act that seeks to
				damage data, steal data, or disrupt digital life in general. Cyber
				threats include computer viruses, data breaches, Denial of Service
				(DoS) attacks, and other attack vectors. Cyber threats also refer to
				the possibility of a successful cyber attack that aims to gain
				unauthorized access, damage, disrupt, or steal an information
				technology asset, computer network, intellectual property, or any
				other form of sensitive data. Cyber threats can come from within an
				organization by trusted users or from remote locations by unknown
				parties.
			</p>
			<h3 style="color: azure; font-size: 2.5vw">Uhh ... in English ?</h3>
			<p style="color: #a7a7a7">
				Lets illustrate this with a few examples. An attacker can phish you
				into giving them your login information. With your login information,
				they may harm your account or use your data. UPI scams, viruses like
				Morris Worm, nimda, ILOVEYOU, trojans etc are also some examples of a
				threat. A popular example is in the 2020 pandemic, a lot of webcams
				were hacked.
			</p>
			<h3 style="color: azure; font-size: 2.5vw">
				So, How can I be safe in the digital age ?
			</h3>
			<p style="color: #a7a7a7">Don't worry, we've got you covered.</p>
			<div class="cardscontainer">
				<div class="cards"></div>
				<div class="cards"></div>
				<div class="cards"></div>
			</div>
		</div>
	</div>
</body>

</html>