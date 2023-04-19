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

<body>
    <div class="container">
        <form method="post">
            <label>Enter The URL to scan</label><br>
            <input autocomplete="off" class="url" type="text" name="url"><br>
            <input class="button" type="submit" value="Scan">
        </form>
        <?php
        if (isset($_POST['url'])) {
            $apikey = '565510b98fd1e99d7015f59371f5f3d80d4044f4d456d226c8fe767809b9fac6';
            $url = $_POST['url'];
            $scan_url = 'https://www.virustotal.com/vtapi/v2/url/scan';
            $report_url = 'https://www.virustotal.com/vtapi/v2/url/report';

            // Send a URL to VirusTotal for scanning
            $post_fields = array('apikey' => $apikey, 'url' => $url);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $scan_url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            // Get the scan ID from the response
            $scan_id = json_decode($response)->scan_id;
            // Poll the VirusTotal API until the scan is complete
            $ch = curl_init();
            $url = $report_url . '?apikey=' . $apikey . '&resource=' . $scan_id;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            // Parse the response and display the results
            $result = json_decode($response);
            if ($result->response_code == 1) {
                if ($result->positives > 0) {
                    echo "<p class='notsafe'>The Website Is Not Safe To Visit</p><br>";
                } else {
                    echo "<p class='safe'>The Website Is Safe To Visit</p><br>";
                }
                //echo "Scan ID: " . $result->scan_id . "<br>";
                //echo "<p class='scanResult'> " . $result->positives . " Of Our Scanner Have Indicated That the URL Is Malicious</p><br>";
                //echo "Scan date: " . $result->scan_date . "<br>";
                echo "<a class='infourl' href=$result->permalink target='_blank'>For more info click here</a> " . "<br>";
            } else {
                echo "Error: " . $result->verbose_msg . "<br>";
            }
        }
        ?>
    </div>
</body>
<style>
    form {
        display: block;
        margin: 1rem auto 5rem auto;
        background-color: #cc2c67;
        padding: 2rem;
        border-radius: 50px;
        max-width: 75%;
    }

    body {
        background-color: #120e2b;
    }

    .container {
        background-color: #120e2b;
        margin: 0 10rem 0 10rem;
        padding: 5rem 10rem;
    }

    .url {
        display: block;
        margin: 1rem auto;
        color: white;
        width: 80%;
        border-radius: 50px;
        background-color: #f97169;
        outline: none;
        border: 2px solid #fafafa;
        padding: 1rem 3rem;
        font-weight: 500;
        letter-spacing: 0.5px;

    }

    .button {
        display: block;
        color: white;
        text-align: center;
        font-size: 20px;
        cursor: pointer;
        margin: 1rem auto;
        padding: 1rem 3rem;
        background-color: #fa7268;
        border-radius: 20px;
    }

    .button:hover {
        animation-name: button-hover;
        animation-duration: 0.5s;
        animation-fill-mode: forwards;
    }

    @keyframes button-hover {
        100% {
            border-color: #fa7268;
            background-color: #a200ff;
        }
    }

    .button:focus {
        outline: none;
    }

    label {
        display: block;
        margin: 1rem auto;
        text-align: center;
        font-size: xx-large;
        color: white;
    }

    .scanResult {
        display: block;
        margin: 1rem auto;
        font-size: xx-large;
        color: white;
        text-align: center;
    }

    .safe {
        background-color: greenyellow;
        border-radius: 50px;
        padding: 1rem;
        text-align: center;
        color: white;
        display: block;
        margin: 1rem auto;
        font-size: xx-large;
    }

    .notsafe {
        background-color: lightcoral;
        border-radius: 50px;
        padding: 1rem;
        text-align: center;
        color: white;
        display: block;
        margin: 1rem auto;
        font-size: xx-large;
    }

    .infourl {
        color: #cc2c67;
        text-align: center;
        display: block;
        margin: 1rem auto;
        font-size: xx-large;
        text-decoration: none;
    }

    .infourl:hover {
        color: #f97169;
    }
</style>

<?php include './Footer/footer.php'; ?>