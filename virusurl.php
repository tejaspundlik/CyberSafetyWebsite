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
    <link rel="stylesheet" href="./StyleSheet/virusurl.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./StyleSheet/font.css" />
</head>

<body>
    <div class="container">
        <form method="post">
            <label>Enter The URL to scan</label><br>
            <input required autocomplete="off" class="url" type="text" name="url"><br>
            <input class="button" type="submit" value="Scan">
        </form>
        <?php
        if (isset($_POST['url']) && $_POST['url'] != '') {
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
                echo "<p class='notsafe'>The API Is Busy Try Again Later</p><br>";
            }
        }
        ?>
    </div>
</body>
<?php include './Footer/footer.php'; ?>