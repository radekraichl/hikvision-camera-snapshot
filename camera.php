<?php
$URL = 'http://77.48.24.241:8003/ISAPI/Streaming/channels/501/picture';
$username = 'admin';
$password = 'KNSystems8210';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST); // Use Digest authentication
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$result = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($status_code == 200) {
    header('Content-Type: image/jpeg');
    echo $result;
} else {
    echo "Error: HTTP $status_code - $error";
}
?>
