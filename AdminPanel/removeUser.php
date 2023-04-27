<?php
echo '<title>Admin Page</title>';
echo '<link rel="icon" type="image/x-icon" href="../Assets/icon.ico">';
include '../AdminPanel/adminnavbar.php';
if (isset($_POST['email']) && $_POST['email'] != '') {
	$mail = $_POST['email'];
	$servername = "sql12.freemysqlhosting.net";
	$username = "sql12608164";
	$password = "eDcWvKrJUv";
	$dbname = "sql12608164";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$stmt = $conn->prepare("DELETE FROM newsletter_members WHERE email = ?");
	$stmt->bind_param("s", $mail);
	$stmt->execute();
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	$stmt->close();
	$conn->close();
	if ($affected_rows == 0) {
		echo '<div class="alert alert-danger alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
			<strong>Oops!</strong><hr>The User Does Not Exist Or Has Been Already Removed
			<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
	} else {
		echo '<div class="alert alert-success alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
			<strong>Success!</strong><hr>User Has Been Removed From The Newsletter
			<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Review Page</title>
<<<<<<<< HEAD:addQuiz.php
	<link rel="stylesheet" href="./StyleSheet/addQuiz.css" />
========
	<link rel="stylesheet" href="../StyleSheet/removeUser.css" />
>>>>>>>> 61ac055488e7d9d67abb982089bb54b0f7056f47:AdminPanel/removeUser.php
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../StyleSheet/font.css" />
</head>

<body>
	<div class="signin" style="margin-bottom:5rem;margin-top:8rem;">
		<div class="left">
<<<<<<<< HEAD:addQuiz.php
			<img src="./Assets/AddQuestion.png" />
			<p>Before Adding a Question to the Quiz. Some pointers:</p>
			<ul>
				<li>Make Sure The Correct Option Is In Upper Case</li>
				<li>The Question Should Be Relevant To The Study Material</li>
				<li>Enter The Fields In Camel Case</li>
			</ul>
		</div>
		<div class="right">
			<h1>Add Question</h1>
			<form action="" method="post">
				<input type="text" id="question" name="question" required placeholder="Enter Question" autocomplete="off" /><br />
				<input type="text" id="optionA" name="optionA" required placeholder="Enter Option A" autocomplete="off" /><br />
				<input type="text" id="optionB" name="optionB" required placeholder="Enter Option B" autocomplete="off" /><br />
				<input type="text" id="optionC" name="optionC" required placeholder="Enter Option C" autocomplete="off" /><br />
				<input type="text" id="optionD" name="optionD" required placeholder="Enter Option D" autocomplete="off" /><br />
				<input type="text" id="correctOption" name="correctOption" required placeholder="Enter Correct Option" autocomplete="off" /><br />
				<input type="submit" value="Insert Question" />
========
			<img src="../Assets/removeUser.png" />
			<p>Enter Email Address Of The User To Remove From The Newsletter</p>
		</div>
		<div class="right">
			<h1>Remove User</h1>
			<form action="" method="post">
				<input type="email" id="email" name="email" required placeholder="Email" autocomplete="off" /><br />
				<input type="submit" value="Remove" />
>>>>>>>> 61ac055488e7d9d67abb982089bb54b0f7056f47:AdminPanel/removeUser.php
			</form>
		</div>
	</div>
</body>

</html>