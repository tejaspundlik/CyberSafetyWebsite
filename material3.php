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
    <link rel="stylesheet" href="./StyleSheet/material3.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./StyleSheet/font.css" />
    <title>Cryptography</title>
    <script>
        function encrypt() {
            let plainText = document.getElementById("plain-text").value;
            let key = parseInt(document.getElementById("key").value);
            let cipherText = "";
            for (let i = 0; i < plainText.length; i++) {
                let charCode = plainText.charCodeAt(i);
                if (charCode >= 65 && charCode <= 90) {
                    charCode = ((charCode - 65 + key) % 26) + 65;
                } else if (charCode >= 97 && charCode <= 122) {
                    charCode = ((charCode - 97 + key) % 26) + 97;
                }
                cipherText += String.fromCharCode(charCode);
            }
            document.getElementById("cipher-text").value = cipherText;
        }

        function decrypt() {
            let cipherText = document.getElementById("cipher-text").value;
            let key = parseInt(document.getElementById("key2").value);
            let plainText = "";
            for (let i = 0; i < cipherText.length; i++) {
                let charCode = cipherText.charCodeAt(i);
                if (charCode >= 65 && charCode <= 90) {
                    charCode = ((charCode - 65 - key + 26) % 26) + 65;
                } else if (charCode >= 97 && charCode <= 122) {
                    charCode = ((charCode - 97 - key + 26) % 26) + 97;
                }
                plainText += String.fromCharCode(charCode);
            }
            document.getElementById("plain-text").value = plainText;
        }
    </script>
</head>

<body>
    <div class="pagecontainer">
        <div class="division1">
            <h1 class="gradient-text">Cryptography</h1>
            <div class="container1">
                <h2>Contents:</h2>
                <ul>
                    <li><a href="#">What is Cryptography ?</a></li>
                    <li>
                        <a href="#section1">Symmetric-Key Cryptography</a>
                    </li>
                    <li>
                        <a href="#section2">Asymmetric-Key Encipherment</a>
                    </li>
                    <li><a href="#section3">Hashing</a></li>
                    <li><a href="#section5">Caeser Cipher</a></li>
                </ul>
            </div>
            <img style="width: 100%" src="./Assets/waves.png" id="wave" />
            <div class="container2">
                <div id="section1">
                    <h2>What is Cryptography ?</h2>
                    <p>
                        Some security mechanisms listed in the previous
                        section can be implemented using cryptography.<b>
                            Cryptography</b>, a word with Greek origins, means “secret
                        writing.” However, we use the term to refer to the
                        science and art of transforming messages to make
                        them secure and immune to attacks. Although in the
                        past
                        <i>cryptography</i>
                        referred only to the <b>encryption</b> and
                        <b>decryption</b> of messages using secret keys,
                        today it is defined as involving three distinct
                        mechanisms: symmetric-key encipherment,
                        asymmetric-key encipherment, and hashing. We will
                        briefly discuss these three mechanisms here.
                    </p>
                </div>

                <div id="section2">
                    <h2>Symmetric-Key Cryptography</h2>
                    <img src="/Assets/studyMaterialAsset6.png" alt="symmetric-key" id="img1" />
                    <p>
                        In
                        <b>symmetric-key encipherment</b> (sometimes called
                        secret-key encipherment or secretkey cryptography),
                        an entity, say Alice, can send a message to another
                        entity, say Bob, over an insecure channel with the
                        assumption that an adversary, say Eve, cannot
                        understand the contents of the message by simply
                        eavesdropping over the channel. Alice encrypts the
                        message using an encryption algorithm; Bob decrypts
                        the message using a decryption algorithm.
                        Symmetric-key encipherment uses a single
                        <b>secret key</b> for both encryption and
                        decryption. Encryption/decryption can be thought of
                        as electronic locking. In symmetric key enciphering,
                        Alice puts the message in a box and locks the box
                        using the shared secret key; Bob unlocks the box
                        with the same key and takes out the message.
                        <br />
                        <br />
                        The Caesar Cipher is one of the simplest symmetric
                        encryption techniques, and of course, one of the
                        easiest to crack. Click
                        <a href="#section5">here</a> to see it in action !
                    </p>
                </div>
                <div id="section3">
                    <h2>Asymmetric-Key Cryptography</h2>
                    <img src="/Assets/studyMaterialAsset7.png" alt="assymetric-key" id="img2" />
                    <p>
                        In asymmetric-key encipherment (sometimes called
                        public-key encipherment or public-key cryptography),
                        we have the same situation as the symmetric-key
                        encipherment, with a few exceptions. First, there
                        are two keys instead of one: one public key and one
                        private key. To send a secured message to Bob, Alice
                        first encrypts the message using Bob's public key.
                        To decrypt the message, Bob uses his own private
                        key.
                    </p>
                </div>
                <div id="section4">
                    <h2>Hashing</h2>
                    <p>
                        In hashing, a fixed-length message digest is created
                        out of a variable-length message. The digest is
                        normally much smaller than the message. To be
                        useful, both the message and the digest must be sent
                        to Bob. Hashing is used to provide checkvalues,
                        which were discussed earlier in relation to
                        providing data integrity.
                    </p>
                </div>
                <div id="section5">
                    <h2>Caeser Cipher</h2>
                    <p>
                        The Caesar Cipher technique is one of the earliest
                        and simplest methods of encryption technique. It’s
                        simply a type of substitution cipher, i.e., each
                        letter of a given text is replaced by a letter with
                        a fixed number of positions down the alphabet. For
                        example with a shift of 1, A would be replaced by B,
                        B would become C, and so on. The method is
                        apparently named after Julius Caesar, who apparently
                        used it to communicate with his officials.
                    </p>
                </div>
                <div class="container3">
                    <div class="caeser-container">
                        <div id="input">
                            <label for="plain-text">Enter the plain text:</label>
                            <input type="text" id="plain-text" placeholder="Enter the plain text..." />
                            <label for="key">Select the key:</label>
                            <select id="key">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <button onclick="encrypt()">Encrypt</button>
                        </div>
                        <div id="output">
                            <label for="cipher-text">Cipher text:</label>
                            <input type="text" id="cipher-text" readonly />
                            <label for="key">Select the key:</label>
                            <select id="key2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <button onclick="decrypt()">Decrypt</button>
                        </div>
                        <div class="diamond"></div>
                    </div>
                </div>
                <br />
                <div class="pagination-container">
                    <div class="pagination">
                        <a href="./material1.php">1</a>
                        <a href="./material2.php">2</a>
                        <a href="./material3.php" class="active">3</a>
                        <a href="./material4.php">4</a>
                        <a href="./material5.php">5</a>
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