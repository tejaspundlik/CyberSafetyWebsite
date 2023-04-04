<?php
session_start();

// Clear session data
session_unset();
session_destroy();

// Set loggedIn to false
$_SESSION['loggedIn'] = false;
header('Location:./homepage.php');
