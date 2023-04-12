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

// function to fetch report from permalink
function getReportFromPermalink($permalink, $apiKey)
{
    $url = "https://www.virustotal.com/vtapi/v2/file/report";
    $params = array('apikey' => $apiKey, 'resource' => $permalink);
    $response = file_get_contents($url . '?' . http_build_query($params));
    return json_decode($response, true);
}

// check if form submitted
if (isset($_POST['submit'])) {
    // get the URL from the form
    $url = $_POST['url'];

    // get the API key
    $apiKey = 'your-api-key-here';

    // scan the URL using VirusTotal API
    $urlToScan = urlencode($url);
    $url = "https://www.virustotal.com/vtapi/v2/url/scan";
    $params = array('apikey' => $apiKey, 'url' => $urlToScan);
    $response = file_get_contents($url . '?' . http_build_query($params));
    $json_response = json_decode($response, true);

    // get the scan ID and response code
    $scan_id = $json_response['scan_id'];
    $response_code = $json_response['response_code'];

    // display the results
    if ($response_code == 1) {
        echo "Scan request successfully submitted<br>";
        echo "Scan ID: " . $scan_id . "<br>";
        echo "Checking report in 30 seconds...<br>";

        // wait for 30 seconds before fetching report from permalink
        sleep(30);
        $report = getReportFromPermalink($scan_id, $apiKey);

        // display the report
        echo "<br><br>Report:<br>";
        echo "Permalink: <a href='" . $report['permalink'] . "'>" . $report['permalink'] . "</a><br>";
        echo "Scan Date: " . $report['scan_date'] . "<br>";
        echo "Positives: " . $report['positives'] . "<br>";
        echo "Total: " . $report['total'] . "<br>";
        echo "File Type: " . $report['type'] . "<br>";
        echo "MD5: " . $report['md5'] . "<br>";
        echo "SHA1: " . $report['sha1'] . "<br>";
        echo "SHA256: " . $report['sha256'] . "<br>";
        echo "Verbose Message: " . $report['verbose_msg'] . "<br>";
    } else {
        echo "Scan request failed, please try again later.";
    }
}
?>
<html>

<head>
    <title>VirusTotal URL Scanner</title>
</head>

<body>
    <form method="post" action="">
        <label for="url">Enter URL to scan:</label>
        <input type="text" name="url" id="url" required><br><br>
        <input type="submit" name="submit" value="Scan">
    </form>
</body>

</html>