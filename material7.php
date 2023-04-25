<?php
session_start();
echo '<title>Cyber Safety Awareness</title>';
echo '<link rel="icon" type="image/x-icon" href="./Assets/icon.ico">';
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
    <link rel="stylesheet" href="./StyleSheet/material2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./StyleSheet/font.css" />
    <title>Social Media Safety</title>
</head>

<body>

    <div class="pagecontainer">
        <div class="division1">
            <h1 class="gradient-text">Social Media Safety</h1>
            <div class="container1">
                <h2>Contents:</h2>
                <ul>
                    <li><a href="#">What is Social Media Safety? </a></li>
                    <li><a href="#section1">Device Security</a></li>
                </ul>
            </div>
            <img style="width: 100%" src="./Assets/waves.png" id="wave" />
            <div class="container2">
                <div id="section1">
                    <h2>What is Social Media Safety?</h2>
                    <p>
                        Social media safety is an important aspect of online
                        safety. It is essential for users to understand the
                        risks associated with social media and take measures
                        to protect their privacy and security. Here are some
                        tips on how to stay safe on social media:
                        <br />
                    </p>
                    <img src="./Assets/studyMaterialAsset13.jpeg" alt="social-media" id="img" />
                    <br />
                    <br />
                    <ul style="color: rgb(233, 233, 194)">
                        <li>
                            Set privacy settings: Review privacy settings
                            for each social media account and ensure that
                            only people you know and trust can see your
                            posts and personal information. Be cautious when
                            sharing personal information and avoid posting
                            sensitive information like your home address or
                            phone number.
                        </li>
                        <li>
                            Avoid clicking on suspicious links: Be cautious
                            when clicking on links in social media posts or
                            messages, especially if the source is unknown.
                            Scammers can use links to spread malware or
                            phishing attacks.
                        </li>
                        <li>
                            Report suspicious activity: Report any
                            suspicious activity or accounts to the social
                            media platform's support team. This can include
                            accounts impersonating you, receiving spam or
                            phishing messages, or any other activity that
                            appears suspicious.
                        </li>
                        <li>
                            Be cautious when accepting friend requests: Be
                            cautious when accepting friend requests or
                            connections from people you don't know. Scammers
                            often use fake profiles to connect with people
                            and try to obtain personal information.
                        </li>
                        <li>
                            Use two-factor authentication: Consider enabling
                            two-factor authentication for your social media
                            accounts. This adds an extra layer of security
                            to your account by requiring a second form of
                            verification, such as a code sent to your phone.
                        </li>
                    </ul>
                    <br />
                    <p>
                        Overall, social media safety requires users to be
                        mindful and cautious of what they share online, who
                        they connect with, and the privacy settings they
                        use. By taking steps to protect their personal
                        information and privacy, users can enjoy the
                        benefits of social media without putting themselves
                        at risk.
                    </p>
                    <br />
                </div>
                <div id="section2">
                    <h2>Device Security</h2>
                    <p>
                        Device security is an essential aspect of cyber
                        safety awareness. With the increasing use of mobile
                        devices, laptops, and other internet-connected
                        devices, ensuring the security of these devices is
                        crucial. Here are some ways on how to maintain
                        device security:
                        <br />
                    </p>
                    <ul style="color: rgb(233, 233, 194)">
                        <li>
                            Use strong and unique passwords: Use strong and
                            unique passwords for each device, and avoid
                            using the same password for multiple devices.
                            Consider using a password manager to create and
                            store strong passwords.
                        </li>
                        <li>
                            Keep software up to date: Keep your device's
                            operating system and other software up to date.
                            Software updates often contain security patches
                            that address vulnerabilities that cybercriminals
                            could exploit.
                        </li>
                        <li>
                            Install antivirus software: Install and
                            regularly update antivirus software to protect
                            against malware and other malicious software.
                        </li>
                        <li>
                            Be cautious of public Wi-Fi: Be cautious when
                            using public Wi-Fi networks, as they can be
                            insecure and leave your device vulnerable to
                            cyber attacks. If you must use public Wi-Fi, use
                            a virtual private network (VPN) to encrypt your
                            internet connection.
                        </li>
                        <li>
                            Be cautious of email attachments and links: Be
                            cautious when opening email attachments or
                            clicking on links, especially if the source is
                            unknown. Cybercriminals often use email as a way
                            to spread malware and other malicious software.
                        </li>
                    </ul>
                    <br />
                    <p>
                        In the end, device security requires individuals to
                        be proactive and take steps to protect their devices
                        from cyber threats. By implementing these best
                        practices, individuals can reduce the risk of cyber
                        attacks and protect their personal information and
                        privacy.
                    </p>
                </div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/6iPKt6F64rc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="pagination-container">
                <div class="pagination">
                    <a href="./material1.php">1</a>
                    <a href="./material2.php">2</a>
                    <a href="./material3.php">3</a>
                    <a href="./material4.php">4</a>
                    <a href="./material5.php">5</a>
                    <a href="./material6.php">6</a>
                    <a href="./material7.php" class="active">7</a>
                    <a href=" ./material8.php">8</a>
                    <a href="./material9.php">References</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>