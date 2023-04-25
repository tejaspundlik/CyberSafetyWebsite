<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="../NavBar/newNavbar.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-xxl navbar-light">
        <a style="margin:0;padding:0;" href="../homepage.php"><img style="margin-left: 5%;max-width:30%;" src="../Assets/icon.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="navImage" src="../Assets/virus.gif" />
                        <p class="navText">Virus Checker</p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../virusurl.php">URL Checker</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../virusfile.php">File Checker</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../reviewpage.php">
                        <img class="navImage" src="../Assets/recommend.gif" />
                        <p class="navText">Products</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../passchecker.php">
                        <img class="navImage" src="../Assets/lock.gif" />
                        <p class="navText">Passwords</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contactpage.php">
                        <img class="navImage" src="../Assets/location.gif" />
                        <p class="navText">Contact Us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../signOut.php">
                        <img class="navImage" src="../Assets/signin.gif" />
                        <p class="navText">Sign Out</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>