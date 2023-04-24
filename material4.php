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
    <link rel="stylesheet" href="./StyleSheet/material4.css" />
    <title>Malware</title>
</head>

<body>
    <div class="pagecontainer">
        <div class="division1">
            <h1 class="gradient-text">Malware</h1>
            <div class="container1">
                <h2>Contents:</h2>
                <ul>
                    <li><a href="#">What is Malware ?</a></li>
                    <li><a href="#section2">Ransomware</a></li>
                    <li><a href="#section3">Spyware</a></li>
                    <li><a href="#section4">Adware</a></li>
                    <li><a href="#section5">Trojans</a></li>
                    <li><a href="#section6">Worms</a></li>
                    <li><a href="#section7">Virus</a></li>
                </ul>
            </div>
            <img style="width: 100%" src="./Assets/waves.png" id="wave" />
            <div class="container2">
                <div id="section1">
                    <h2>What is Malware ?</h2>
                    <p>
                        Malware is software that is specifically designed to
                        disrupt, damage, or gain unauthorized access to a
                        computer system.
                        <br />
                        While there are many different variations of
                        malware, you are most likely to encounter the
                        following malware types:
                    </p>
                    <img src="./Assets/studyMaterialAsset8.png" alt="malware-types" id="img1" />
                </div>
                <div id="section2">
                    <br />
                    <h2>Ransomware</h2>
                    <p>
                        Ransomware is software that uses encryption to
                        disable a target's access to its data until a ransom
                        is paid. The victim organization is rendered
                        partially or totally unable to operate until it
                        pays, but there is no guarantee that payment will
                        result in the necessary decryption key or that the
                        decryption key provided will function properly.
                    </p>
                    <div class="example-container">
                        <img src="./Assets/studyMaterialAsset9.png" alt="malware-icon" id="img2" />
                        <div class="example_text">
                            <h2 style="padding-left: 5%">
                                Ransomware Example
                            </h2>
                            <p style="padding-left: 5%">
                                The city of Baltimore was hit by a type of
                                ransomware named RobbinHood, which halted
                                all city activities, including tax
                                collection, property transfers, and
                                government email for weeks. This attack has
                                cost the city more than $18 million so far,
                                and costs continue to accrue. The same type
                                of malware was used against the city of
                                Atlanta in 2018, resulting in costs of $17
                                million.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="section3">
                    <br />
                    <h2>Spyware</h2>
                    <p>
                        Spyware collects information about users’ activities
                        without their knowledge or consent. This can include
                        passwords, pins, payment information and
                        unstructured messages.
                        <br />
                        The use of spyware is not limited to the desktop
                        browser: it can also operate in a critical app or on
                        a mobile phone.
                    </p>
                    <div class="example-container">
                        <img src="./Assets/studyMaterialAsset9.png" alt="malware-icon" id="img2" />
                        <div class="example_text">
                            <h2 style="padding-left: 5%">
                                Spyware Example
                            </h2>
                            <p style="padding-left: 5%">
                                DarkHotel, which targeted business and
                                government leaders using hotel WIFI, used
                                several types of malware in order to gain
                                access to the systems belonging to specific
                                powerful people. Once that access was
                                gained, the attackers installed keyloggers
                                to capture their targets passwords and other
                                sensitive information
                            </p>
                        </div>
                    </div>
                </div>
                <div id="section4">
                    <br />
                    <h2>Adware</h2>
                    <p>
                        Adware tracks a user's surfing activity to determine
                        which ads to serve them. Although adware is similar
                        to spyware, it does not install any software on a
                        user's computer, nor does it capture keystrokes.
                    </p>
                    <div class="example-container">
                        <img src="./Assets/studyMaterialAsset9.png" alt="malware-icon" id="img2" />
                        <div class="example_text">
                            <h2 style="padding-left: 5%">Adware Example</h2>
                            <p style="padding-left: 5%">
                                Adware called Fireball infected 250 million
                                computers and devices in 2017, hijacking
                                browsers to change default search engines
                                and track web activity. However, the malware
                                had the potential to become more than a mere
                                nuisance. Three-quarters of it was able to
                                run code remotely and download malicious
                                files.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="section5">
                    <br />
                    <h2>Trojans</h2>
                    <p>
                        A Trojan disguises itself as desirable code or
                        software. Once downloaded by unsuspecting users, the
                        Trojan can take control of victim's systems for
                        malicious purposes. Trojans may hide in games, apps,
                        or even software patches, or they may be embedded in
                        attachments included in phishing emails
                    </p>
                    <div class="example-container">
                        <img src="./Assets/studyMaterialAsset9.png" alt="malware-icon" id="img2" />
                        <div class="example_text">
                            <h2 style="padding-left: 5%">Trojan Example</h2>
                            <p style="padding-left: 5%">
                                Emotet is a sophisticated banking trojan
                                that has been around since 2014. It is hard
                                to fight Emotet because it evades
                                signature-based detection, is persistent,
                                and includes spreader modules that help it
                                propagate. The trojan is so widespread that
                                it is the subject of a US Department of
                                Homeland Security alert, which notes that
                                Emotet has cost state, local, tribal and
                                territorial governments up to $1 million per
                                incident to remediate
                            </p>
                        </div>
                    </div>
                </div>
                <div id="section6">
                    <br />
                    <h2>Worms</h2>
                    <p>
                        Worms target vulnerabilities in operating systems to
                        install themselves into networks. They may gain
                        access in several ways: through backdoors built into
                        software, through unintentional software
                        vulnerabilities, or through flash drives. Once in
                        place, worms can be used by malicious actors to
                        launch DDoS
                        <a href="#">( What is a DDoS attack ? )</a> attacks,
                        steal sensitive data, or conduct ransomware attacks.
                    </p>
                    <div class="example-container">
                        <img src="./Assets/studyMaterialAsset9.png" alt="malware-icon" id="img2" />
                        <div class="example_text">
                            <h2 style="padding-left: 5%">Worm Example</h2>
                            <p style="padding-left: 5%">
                                Stuxnet was probably developed by the US and
                                Israeli intelligence forces with the intent
                                of setting back Iran's nuclear program. It
                                was introduced into Iran's environment
                                through a flash drive. Because the
                                environment was air-gapped, its creators
                                never thought Stuxnet would escape its
                                target's network — but it did. Once in the
                                wild, Stuxnet spread aggressively but did
                                little damage, since its only function was
                                to interfere with industrial controllers
                                that managed the uranium enrichment process.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="section7">
                    <br />
                    <h2>Virus</h2>
                    <p>
                        A virus is a piece of code that inserts itself into
                        an application and executes when the app is run.
                        Once inside a network, a virus may be used to steal
                        sensitive data, launch DDoS attacks or conduct
                        ransomware attacks.
                    </p>
                    <div class="example-container">
                        <img src="./Assets/studyMaterialAsset9.png" alt="malware-icon" id="img2" />
                        <div class="example_text">
                            <h2 style="padding-left: 5%">
                                Virus vs Trojan
                            </h2>
                            <p style="padding-left: 5%">
                                A virus cannot execute or reproduce unless
                                the app it has infected is running. This
                                dependence on a host application makes
                                viruses different from trojans, which
                                require users to download them, and worms,
                                which do not use applications to execute.
                            </p>
                        </div>
                    </div>
                    <br />
                    <img src="./Assets/studyMaterialAsset10.png" alt="virus-trojan" id="img3" />
                </div>
                <div class="pagination-container">
                    <div class="pagination">
                        <a href="./material1.php">1</a>
                        <a href="./material2.php">2</a>
                        <a href="./material3.php">3</a>
                        <a href="./material4.php" class="active">4</a>
                        <a href=" ./material5.php">5</a>
                        <a href="./material6.php">6</a>
                        <a href="./material7.php">7</a>
                        <a href="./material8.php">8</a>
                        <a href="./material9.php">References</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>