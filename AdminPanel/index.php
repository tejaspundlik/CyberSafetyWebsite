<?php
if (isset($_POST['email']) && $_POST['email'] != '') {
    $mail = $_POST['email'];
    $formpassword = $_POST['password'];
    $servername = "sql12.freemysqlhosting.net";
    $username = "sql12608164";
    $password = "eDcWvKrJUv";
    $dbname = "sql12608164";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $hash = md5($formpassword);
    $stmt = $conn->prepare("SELECT * FROM websiteadmin WHERE adminid = ? and adminpassword = ?");
    $stmt->bind_param("ss", $mail, $hash);
    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = mysqli_num_rows($result);
    if ($result && $num_rows >= 1) {
        $stmt->close();
        $conn->close();
        header('Location:../AdminPanel/viewquestions.php');
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show fixed-top mt-8 py-3 text-center" role="alert" style="font-size: 1.2rem;">
			<strong>Oops!</strong><hr>Your Admin-Id Or Admin-Password Is Wrong.
			<button type="button" class="btn-close" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
    }
    $stmt->close();
    $conn->close();
}
echo '<title>Cyber Safety Awareness</title>';
echo '<link rel="icon" type="image/x-icon" href="../Assets/icon.ico">';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../StyleSheet/font.css" />
    <link rel="stylesheet" href="../StyleSheet/signRegister.css" />
</head>

<body>
    <div class="center">
        <div class="signin" style="margin-bottom:5rem;margin-top:15rem;">
            <div class="left">
                <img src="../Assets/signin.jpg" />
                <p>Contact Your Supervisor For Your Admin-ID And Admin-Password</p>
            </div>
            <div class="right">
                <h1>Admin Sign In</h1>
                <form action="" method="post">
                    <input id="email" name="email" required placeholder="ID" autocomplete="off" /><br />
                    <input id="password" name="password" type="password" required placeholder="Password" autocomplete="off" /><br />
                    <input type="submit" value="Sign In" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>