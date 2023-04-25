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
    <title>Cyber Bullying</title>
</head>

<body>

    <div class="pagecontainer">
        <div class="division1">
            <h1 class="gradient-text">Cyber Bullying</h1>
            <div class="container1">
                <h2>Contents:</h2>
                <ul>
                    <li><a href="#">Various forms of cyberbullying</a></li>
                    <li><a href="#section1">Plagiarism</a></li>
                    <li>
                        <a href="#section2">Effects of Cyber Attacks</a>
                    </li>
                </ul>
            </div>
            <img style="width: 100%" src="./Assets/waves.png" id="wave" />
            <div class="container2">
                <div id="section1">
                    <h2>Various forms of cyberbullying</h2>
                    <p>
                        Cyberbullying is the use of digital devices (cell
                        phones, computers, tablets, etc.) to intentionally
                        and repetitively hurt a person.There are various
                        forms of cyberbullying.
                        <br />
                    </p>

                    <ul style="color: rgb(233, 233, 194)">
                        <li>
                            Flaming: This type of cyberbullying involves
                            online fights with angry and vulgar messages.
                        </li>
                        <li>
                            Harassment: Online harassment can take the form
                            of insulting, mean, and derogatory messages
                            online.
                        </li>
                        <li>
                            Denigration: Denigration is when someone posts
                            rumors or gossip about someone online, with the
                            purpose of damaging their reputation.
                        </li>
                        <li>
                            Impersonation: Impersonation means pretending to
                            be someone else to get them in trouble.
                        </li>
                        <li>
                            Outing: Outing is when someone shares somebody
                            else's secrets, images or information online.
                        </li>
                        <li>
                            Trickery: When people trick someone into
                            revealing things and then post them online, it's
                            called Trickery.
                        </li>
                        <li>
                            Exclusion: Exclusion is when an individual or a
                            group of people intentionally keeps someone out
                            of an online group.
                        </li>
                        <li>
                            Cyberstalking: Cyberstalking is usually done to
                            create fear in an individual using repeated
                            harassment and denigration.
                        </li>
                    </ul>
                    <br />
                </div>
                <div id="section2">
                    <h2>Plagiarism</h2>
                    <p>
                        Plagiarism is a type of cyber-attack where someone
                        takes your work and posts it under their name. This
                        can be done through various means, such as copying
                        and pasting text from a website or document,
                        submitting someone else's work as one's own, or
                        paraphrasing someone else's work without giving them
                        credit. Plagiarism can harm individuals and
                        businesses in several ways. For example, it can
                        damage the reputation of the original author,
                        decrease the value of their work, and potentially
                        result in legal action. In academic and professional
                        settings, plagiarism can result in academic or
                        professional misconduct charges, which can lead to
                        disciplinary action or even expulsion. In addition,
                        plagiarism can also have serious consequences in the
                        digital world. Search engines like Google use
                        algorithms to detect duplicate content and penalize
                        websites that use it. This can result in a decrease
                        in website traffic and damage to a website's search
                        engine ranking. Therefore, it is important for
                        individuals and businesses to take measures to
                        prevent plagiarism and ensure that all content is
                        original and properly attributed. This includes
                        using plagiarism checker tools, providing proper
                        citations and references, and creating unique
                        content.
                    </p>
                </div>
                <div id="section3">
                    <h2>Effects of Cyber Attacks</h2>
                    <p>
                        Cyber threats can affect your system/ network in the
                        following ways. However, it is to be noted that by
                        implementing Cyber Safety measures, you can prevent
                        the effects of cyber-attacks to a great extent.
                    </p>
                    <ul style="color: rgb(233, 233, 194)">
                        <li>
                            Whenever there is any Cyber breach, there will
                            be a need to upgrade your Cyber Safety system.
                            This will incur additional expenses. The expense
                            is inclusive of new/up-gradation of Cyber
                            Security Technology, Cyber Safety insurance,
                            public relations support, and more of similar
                            nature. Notifying the affected parties of a
                            particular breach could even result in loss of
                            customers.
                        </li>
                        <li>
                            Cyber Safety breach results in the disruption of
                            operation. When there is any cyber-attack, the
                            operation of business comes to a halt for
                            various reasons. If the business operation is
                            continued, the hacker would continue to get
                            access to the confidential information.
                        </li>
                        <li>
                            On the other hand, when certain types of Cyber
                            Safety breaches render the computer/ network
                            inoperable, it would sometimes take weeks to
                            even months to recover the computer/ network.
                            Furthermore, sometimes the access to backup data
                            would also be troublesome.
                        </li>
                        <li>
                            Along with data breaches, comes the issue of
                            reputational damage. When an organization faces
                            a Cyber Safety breach of data leakage, customers
                            often land up with a dozen questions on privacy
                            and integrity. Needless to say, if your
                            organization is known across borders, quite a
                            few conspiracy theories would arise inevitably.
                            This will affect the morale of your
                            organizations workers as well.
                        </li>
                    </ul>
                    <br />
                </div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/DJGTccn_8us" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="pagination-container">
                <div class="pagination">
                    <a href="./material1.php">1</a>
                    <a href="./material2.php">2</a>
                    <a href="./material3.php">3</a>
                    <a href="./material4.php">4</a>
                    <a href="./material5.php">5</a>
                    <a href="./material6.php" class="active">6</a>
                    <a href=" ./material7.php">7</a>
                    <a href="./material8.php">8</a>
                    <a href="./material9.php">References</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>