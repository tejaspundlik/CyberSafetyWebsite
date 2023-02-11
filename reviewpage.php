<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Review Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
<style>
	body {
		background-color: black;
		color: white;
		font-family: Arial, sans-serif;
	}

	h1,
	h2 {
		margin-top: 10vh;
		text-align: center;
		color: azure;
	}

	h2 {
		margin-top: 0;
		font-size: large;
		color: rgb(116, 116, 116);
	}

	.review {
		border: 1px solid white;
		margin: 20px 0;
		padding: 20px;
	}

	form {
		display: flex;
		flex-direction: column;
		align-items: center;
		margin-top: 50px;
	}

	label {
		font-weight: bold;
		margin-bottom: 10px;
	}

	input[type="text"],
	input[type="email"],
	textarea {
		width: 50%;
		height: 30px;
		padding: 10px;
		margin-bottom: 20px;
		border-radius: 20px;
		text-align: center;
		font-weight: bold;
	}

	textarea {
		height: 100px;
		border-radius: 20px;
	}

	input[type="submit"] {
		background-color: white;
		color: black;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		margin-bottom: 7vh;
	}

	.page_container {
		display: flex;
		align-items: center;
		flex-direction: column;
	}

	.form_container {
		display: flex;
		justify-content: center;
		width: 50vw;
		border-radius: 20px;
		background: linear-gradient(to bottom right, #031caa, #c4c5fb);
	}

	.form_items {
		width: 80vw;
		justify-content: center;
		text-align: center;
	}
</style>

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
		<h1>Leave a Review</h1>
		<h2 style="font-style: oblique">Let us know what you think !</h2>
		<br />
		<br />
		<div class="form_container">
			<form action="submit-review.php" method="post">
				<label class="form_items" for="name">Name:</label>
				<input class="form_items" type="text" id="name" name="name" />
				<br /><br />
				<label class="form_items" for="email">Email ID:</label>
				<input class="form_items" type="text" id="email" name="email" />
				<br /><br />
				<label class="form_items" for="review">Review:</label>
				<textarea class="review" name="review"></textarea>
				<br /><br />
				<label for="rating">Rating:</label>
				<select class="rating" name="rating">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				<br /><br />
				<input type="submit" value="Submit Review" />
			</form>
		</div>
	</div>
</body>

</html>