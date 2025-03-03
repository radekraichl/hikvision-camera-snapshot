<?php
// Load configuration from external file
//$config = include 'config_true.php';	// in gitignore
$config = include 'config.php';

$URL = $config['url'];
$username = $config['username'];
$password = $config['password'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST); 	// Use Digest authentication
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
