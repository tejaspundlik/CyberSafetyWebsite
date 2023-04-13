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
        <form method="POST" enctype="multipart/form-data">
            <label>Select file to scan</label><br>
            <input type="file" class="file" name="file"><br>
            <input class="button" type="submit" value="Scan">
        </form>

        <?php
        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];
            // Get the SHA-256 hash of the file
            $hash = hash_file('sha256', $file['tmp_name']);
            // Check if the file has already been scanned
            $check_url = 'https://www.virustotal.com/api/v3/files/' . $hash;
            $ch = curl_init();
            $headers = [
                'x-apikey: 565510b98fd1e99d7015f59371f5f3d80d4044f4d456d226c8fe767809b9fac6'
            ];
            curl_setopt($ch, CURLOPT_URL, $check_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);
            if (property_exists($result, 'error') && $result->error) {
                // If the file has not been scanned yet, send it to VirusTotal for scanning
                $scan_url = 'https://www.virustotal.com/api/v3/files';
                $post_fields = array('file' => new CURLFile($file['tmp_name']));
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $scan_url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                $response = curl_exec($ch);
                $result = json_decode($response);
                curl_close($ch);
                // Loop until the scan is completed
                while ($result->data->attributes->status != 'completed') {
                    sleep(1); // Wait for 10 seconds before checking again
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $check_url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    $response = curl_exec($ch);
                    $result = json_decode($response);
                    curl_close($ch);
                }
            }
            // Display the final result
            if ($result->data->attributes->last_analysis_stats->malicious > 0) {
                echo "<p class='notsafe'>The File Is Infected</p><br>";
            } else {
                echo "<p class='safe'>The File Is Safe</p><br>";
            }
            //$link = "https://www.virustotal.com/gui/file/" . $hash;
            echo "<a class='infourl' href=$link target='_blank'>For more info click here</a><br>";
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

    .file {
        text-align: center;
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

    input[type=file]::file-selector-button {
        margin: 0 1rem;
        border: 2px solid white;
        background: #cc2c67;
        padding: 10px 20px;
        border-radius: 50px;
        color: white;
        cursor: pointer;
    }

    input[type=file]::file-selector-button:hover {
        background: #a200ff;
        border: 2px solid white;
        animation-duration: 0.5s;
        animation-fill-mode: forwards;
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