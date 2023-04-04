<!DOCTYPE html>
<html>

<head>
	<title>VirusTotal API Demo</title>
</head>

<body>
	<h1>VirusTotal API Demo</h1>

	<?php
	// Check if form was submitted
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Define API endpoint and API key
		$url = 'https://www.virustotal.com/vtapi/v2/file/scan';
		$apiKey = '565510b98fd1e99d7015f59371f5f3d80d4044f4d456d226c8fe767809b9fac6';

		// Get file data from form input
		$file = $_FILES['fileToScan'];
		$fileName = $file['name'];
		$fileTmpName = $file['tmp_name'];

		// Create CURL request with API key and file data
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => array('apikey' => $apiKey, 'file' => new
				CURLFILE($fileTmpName, $file['type'], $fileName),),
		)); // Send request to VirusTotal API and get response 
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl); // Display response on page
		if ($err) {
			echo "Error: " . $err;
		} else {
			echo "Scan submitted. Response from
		VirusTotal API:<br /><br />";
			echo $response;
		}
		// First, extract the permalink value from the JSON response
		$data = json_decode($response, true);
		$permalink = $data['permalink'];

		// Make a GET request to the permalink URL and get the HTML response
		$html = file_get_contents($permalink);

		// Extract the detection information from the HTML response using regular expressions
		if (preg_match_all('/<td class="detected-by">(.+?)<\/td>\s*<td class="result">(.+?)<\/td>\s*<td class="update">(.+?)<\/td>/s', $html, $matches)) {
			for ($i = 0; $i < count($matches[0]); $i++) {
				$vendor = trim($matches[1][$i]);
				$result = trim($matches[2][$i]);
				$update = trim($matches[3][$i]);
				echo "<p>$vendor: $result ($update)</p>";
			}
		} else {
			echo "<p>No detections found.</p>";
		}
	}

	?>


	<form method="post" enctype="multipart/form-data">
		<label for="fileToScan">Select a file to scan:</label><br />
		<input type="file" name="fileToScan" /><br />
		<input type="submit" value="Scan" />
	</form>
</body>

</html>