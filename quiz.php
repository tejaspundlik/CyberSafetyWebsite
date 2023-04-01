<?php
include './NavBar/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Review Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="./StyleSheet/quiz.css" />
	<link rel="stylesheet" href="./StyleSheet/navbar.css" />
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
		<button class="button" id="submit">
			<p>Next</p>
		</button>
	</div>
	<script src="./QuizBackend/quiz.js"></script>
</body>

</html>