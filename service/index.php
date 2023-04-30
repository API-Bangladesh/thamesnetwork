<?php
$url = "https://www.orxmlgcvf.openreach.co.uk:9443/emp/4400/AddressMatching"; // Replace with your API URL

// Use cURL to make the API request
$curl = curl_init($url);

curl_setopt ($curl, CURLOPT_SSLCERT, "/home/thamesoptic/ssl/certs/apns-cert.pem");
curl_setopt($curl, CURLOPT_SSLKEY, "/home/thamesoptic/ssl/certs/or.key");
$response = curl_exec($curl);

// Check for errors
if(curl_errno($curl)) {
    echo 'Error: ' . curl_error($curl);
    exit;
}

// Decode the JSON response into a PHP array
//$data = json_decode($response, true);

print_r($data);
print_r($response);
// Close the cURL session
curl_close($curl);
?>