<?php
session_start();
echo '<title>Admin Page</title>';
echo '<link rel="icon" type="image/x-icon" href="../Assets/icon.ico">';
include './adminnavbar.php';
echo "<div class='heading'><h1>The Current Newsletter Member's Email Are</h1></div>";
$servername = "sql12.freemysqlhosting.net";
$username = "sql12608164";
$password = "eDcWvKrJUv";
$dbname = "sql12608164";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM newsletter_members";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='questions'><p>" . $row['email'] . "</p></div>";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../StyleSheet/allQuestions.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../StyleSheet/font.css" />
</head>

</html>