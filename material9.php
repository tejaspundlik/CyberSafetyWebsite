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
    <link rel="stylesheet" href="./StyleSheet/material9.css" />
    <title>References</title>
</head>

<body>

    <div class="pagecontainer">
        <div class="division1">
            <h1 class="gradient-text">References</h1>
            <hr />
            <hr />
            <hr />
            <div class="container1">
                <ul>
                    <li>
                        <a href="http://almuhammadi.com/sultan/books_2020/Forouzan.pdf">
                            Behrouz A. Forouzan: Introduction to
                            Cybersecurity and Network Security (Download
                            Link)
                        </a>
                    </li>
                    <li>
                        <a href="https://intellipaat.com">https://intellipaat.com/</a>
                    </li>
                    <li>
                        <a href="https://www.geeksforgeeks.org/">https://www.geeksforgeeks.org/</a>
                    </li>
                    <li>
                        <a href="https://www.techtarget.com">https://www.techtarget.com/</a>
                    </li>
                </ul>
            </div>
            <img style="width: 100%" src="./Assets/waves.png" id="wave" />
            <div class="container2">
                <div class="pagination-container">
                    <div class="pagination">
                        <a href="./material1.php">1</a>
                        <a href="./material2.php">2</a>
                        <a href="./material3.php">3</a>
                        <a href="./material4.php">4</a>
                        <a href="./material5.php">5</a>
                        <a href="./material6.php">6</a>
                        <a href="./material7.php">7</a>
                        <a href="./material8.php">8</a>
                        <a href="./material9.php" class="active">References</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>