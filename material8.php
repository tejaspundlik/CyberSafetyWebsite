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
    <link rel="stylesheet" href="./StyleSheet/material8.css" />
    <link rel="stylesheet" href="./StyleSheet/font.css" />
    <title>Cyber Safety</title>
</head>

<body>
    <div class="pagecontainer">
        <div class="division1">
            <h1 class="gradient-text">Asymmetric Cryptography</h1>
            <div class="container1">
                <h2>Contents:</h2>
                <ul>
                    <li>
                        <a href="#section1">What is Asymmetric Cryptography?</a>
                    </li>
                    <li>
                        <a href="#section2">How does Asymmetric Cryptography Work?</a>
                    </li>
                    <li>
                        <a href="#section3">Uses of Asymmetric Key Cryptography</a>
                    </li>
                    <li>
                        <a href="#section4">Advantages and Disadvantages</a>
                    </li>
                    <li><a href="#section5">Examples </a></li>
                </ul>
            </div>
            <img style="width: 100%" src="./Assets/waves.png" id="wave" />
            <div class="container2">
                <div id="section1">
                    <h2>What is Asymmetric Cryptography?</h2>
                    <p>
                        Asymmetric cryptography, also known as public-key
                        cryptography, is a process that uses a pair of
                        related keys -- one public key and one private key
                        -- to encrypt and decrypt a message and protect it
                        from unauthorized access or use.
                    </p>
                </div>
                <img src="./Assets/studyMaterialAsset7.png" alt="asymmetric" id="img1" />
                <div id="section2">
                    <h2>How does Asymmetric Cryptography Work?</h2>
                    <p>
                        Asymmetric encryption uses a mathematically related
                        pair of keys for encryption and decryption: a public
                        key and a private key. If the public key is used for
                        encryption, then the related private key is used for
                        decryption. If the private key is used for
                        encryption, then the related public key is used for
                        decryption.
                        <img src="./Assets/studyMaterialAsset12.png" alt="keys" id="img2" />
                        <br /><br />
                        The two participants in the asymmetric encryption
                        workflow are the sender and the receiver. Each has
                        its own pair of public and private keys. First, the
                        sender obtains the receiver's public key. Next, the
                        plaintext message is encrypted by the sender using
                        the receiver's public key. This creates ciphertext.
                        The ciphertext is sent to the receiver, who decrypts
                        it with their private key, returning it to legible
                        plaintext. <br /><br />Because of the one-way nature
                        of the encryption function, one sender is unable to
                        read the messages of another sender, even though
                        each has the public key of the receiver.
                    </p>
                </div>

                <div id="section3">
                    <h2>Uses of Asymmetric Key Cryptography</h2>
                    <p>
                        Asymmetric cryptography is typically used to
                        authenticate data using digital signatures. A
                        digital signature is a mathematical technique used
                        to validate the authenticity and integrity of a
                        message, software or digital document. It is the
                        digital equivalent of a handwritten signature or
                        stamped seal.
                        <br />
                        Asymmetric cryptography can also be applied to
                        systems in which many users may need to encrypt and
                        decrypt messages, including:
                    </p>
                    <ul>
                        <li>
                            <p>
                                <b>Encrypted Mail : </b>A public key can be
                                used to encrypt a message and a private key
                                can be used to decrypt it
                            </p>
                        </li>
                        <li>
                            <p>
                                <b>SSL/TLS : </b>Establishing encrypted
                                links between websites and browsers also
                                makes use of asymmetric encryption
                            </p>
                        </li>
                        <li>
                            <p>
                                <b>Cryptocurrencies : </b>Bitcoin and other
                                cryptocurrencies rely on asymmetric
                                cryptography. Users have public keys that
                                everyone can see and private keys that are
                                kept secret. Bitcoin uses a cryptographic
                                algorithm to ensure only legitimate owners
                                can spend the funds
                            </p>
                        </li>
                    </ul>
                </div>
                <div id="section4">
                    <h2>Advantages and Disadvantages</h2>
                    <h3>Advantages:</h3>
                    <ul>
                        <li>
                            <p>
                                The key distribution problem is eliminated
                                because there's no need for exchanging keys.
                            </p>
                        </li>
                        <li>
                            <p>
                                Security is increased since the private keys
                                don't ever have to be transmitted or
                                revealed to anyone.
                            </p>
                        </li>
                        <li>
                            <p>
                                The use of digital signatures is enabled so
                                that a recipient can verify that a message
                                comes from a particular sender.
                            </p>
                        </li>
                        <li>
                            <p>
                                It allows for nonrepudiation so the sender
                                can't deny sending a message.
                            </p>
                        </li>
                    </ul>
                    <h3>Disadvantages:</h3>
                    <ul>
                        <li>
                            <p>
                                It's a slow process compared to symmetric
                                cryptography. Therefore, it's not
                                appropriate for decrypting bulk messages.
                            </p>
                        </li>
                        <li>
                            <p>
                                If an individual loses his private key, he
                                can't decrypt the messages he receives.
                            </p>
                        </li>
                        <li>
                            <p>
                                Because public keys aren't authenticated, no
                                one can ensure a public key belongs to the
                                person specified. Consequently, users must
                                verify that their public keys belong to
                                them.
                            </p>
                        </li>
                        <li>
                            <p>
                                If a malicious actor identifies a person's
                                private key, the attacker can read that
                                individual's messages.
                            </p>
                        </li>
                    </ul>
                </div>
                <div id="section5">
                    <img src="./Assets/studyMaterialAsset4.svg" alt="notes" id="img4" />
                    <h2>Examples</h2>
                    <ul>
                        <li>
                            <h3>RSA Algorithm</h3>
                            <p>
                                he most widely used asymmetric algorithm --
                                is embedded in the SSL/TLS, which is used to
                                provide secure communications over a
                                computer network. RSA derives its security
                                from the computational difficulty of
                                factoring large integers that are the
                                product of two large prime numbers.
                                Multiplying two large primes is easy, but
                                the difficulty of determining the original
                                numbers from the product factoring forms the
                                basis of public-key cryptography security.
                                The time it takes to factor the product of
                                two sufficiently large primes is beyond the
                                capabilities of most attackers. RSA keys are
                                typically 1024 or 2048 bits long, but
                                experts believe 1024-bit keys will be broken
                                soon, which is why government and industry
                                are moving to a minimum key length of
                                2048-bits.
                            </p>
                        </li>
                        <li>
                            <h3>Elliptic Curve Cryptography (ECC)</h3>
                            <p>
                                (ECC) is gaining favor with many security
                                experts as an alternative to RSA. ECC is a
                                public-key encryption technique based on
                                elliptic curve theory. It can create faster,
                                smaller and more efficient cryptographic
                                keys through the properties of the elliptic
                                curve equation.
                                <br /><br />To break ECC, an attacker must
                                compute an elliptic curve discrete
                                logarithm, which is significantly more
                                difficult problem than factoring. As a
                                result, ECC key sizes can be significantly
                                smaller than those required by RSA while
                                still delivering equivalent security with
                                lower computing power and battery resource
                                usage.
                            </p>
                        </li>
                    </ul>
                    <br />
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xw19eT5thIE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="pagination-container">
                    <div class="pagination">
                        <a href="./material1.php">1</a>
                        <a href="./material2.php">2</a>
                        <a href="./material3.php">3</a>
                        <a href="./material4.php">4</a>
                        <a href="./material5.php">5</a>
                        <a href="./material6.php">6</a>
                        <a href="./material7.php">7</a>
                        <a href="./material8.php" class="active">8</a>
                        <a href=" ./material9.php">References</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>