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
	<title>Review Page</title>
	<link rel="stylesheet" href="./StyleSheet/quiz.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./StyleSheet/font.css" />
</head>

<body>
	<div class="quiz-container" id="quiz">
		<div class="quiz-header">
			<h2 id="question">Question Text</h2>
			<ul>
				<li>
					<input type="radio" name="answer" id="a" class="answer" />
					<label for="a" id="a_text">Answer</label>
				</li>
				<li>
					<input type="radio" name="answer" id="b" class="answer" />
					<label for="b" id="b_text">Answer</label>
				</li>
				<li>
					<input type="radio" name="answer" id="c" class="answer" />
					<label for="c" id="c_text">Answer</label>
				</li>
				<li>
					<input type="radio" name="answer" id="d" class="answer" />
					<label for="d" id="d_text">Answer</label>
				</li>
			</ul>
		</div>

	</div>
	<button class="button" id="submit">
		<p>Next</p>
	</button>
	<footer>
		<?php include './Footer/footer.php'; ?>
	</footer>
</body>
<script src="./QuizBackend/quiz.js"></script>

</html>