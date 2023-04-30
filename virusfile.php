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

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review Page</title>
    <link rel="stylesheet" href="./StyleSheet/virusfile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./StyleSheet/font.css" />
</head>

<body>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <label>Select file to scan</label><br>
            <input type="file" class="file" name="file"><br>
            <input class="button" type="submit" value="Scan">
        </form>

        <?php
        if (isset($_FILES['file'])) {
            $apikey = "565510b98fd1e99d7015f59371f5f3d80d4044f4d456d226c8fe767809b9fac6";
            $file = $_FILES['file'];
            $hash = hash_file('sha256', $file['tmp_name']);
            // Check if the file has already been scanned
            $check_url = 'https://www.virustotal.com/api/v3/files/' . $hash;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $check_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('x-apikey: ' . $apikey));
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
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('x-apikey: ' . $apikey));
                curl_exec($ch);
                $hash = hash_file('sha256', $file['tmp_name']);
                $check_url = 'https://www.virustotal.com/api/v3/files/' . $hash;
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $check_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('x-apikey: ' . $apikey));
                $response = curl_exec($ch);
                $result = json_decode($response);
                curl_close($ch);
            }
            if ($result->data->attributes->last_analysis_stats->malicious > 0) {
                echo "<p class='notsafe'>The File Is Infected</p><br>";
            } else {
                echo "<p class='safe'>The File Is Safe</p><br>";
            }
            $link = "https://www.virustotal.com/gui/file/" . $hash;
            echo "<a class='infourl' href=$link target='_blank'>For more info click here</a><br>";
        }
        ?>
    </div>
</body>
<?php include './Footer/footer.php'; ?>