<?php
// Set the URL and payload
$url = 'https://save-from.net/api/convert';
$payload = json_encode(array(
    'url' => 'https://www.youtube.com/watch?v=2520y5ad1GQ&list=RDGMEMWO-g6DgCWEqKlDtKbJA1GwVMc4-t644vom8&index=3'
));

// Initialize cURL
$ch = curl_init();

// Set the cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload)
));
curl_setopt($ch, CURLOPT_USERAGENT, ' Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36');

// Execute the cURL request
$response = curl_exec($ch);

// Close cURL
curl_close($ch);

$links_array = json_decode($response,true);

echo "<pre>";
print_r($links_array["url"]);
echo "</pre>";

?>
