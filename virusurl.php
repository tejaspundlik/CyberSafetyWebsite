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
        echo "Scan ID: " . $result->scan_id . "<br>";
        echo "Scan result: " . $result->positives . "/" . $result->total . "<br>";
        echo "Scan date: " . $result->scan_date . "<br>";
        echo "Permalink: " . $result->permalink . "<br>";
    } else {
        echo "Error: " . $result->verbose_msg . "<br>";
    }
}
?>

<form method="post">
    URL to scan: <input type="text" name="url"><br>
    <input type="submit" value="Scan">
</form>