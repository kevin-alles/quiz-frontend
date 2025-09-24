<?php
// Include the config file
$config = require __DIR__ . '/config.php';

$serverUrl = $config['server_url'];
$serverPort = $config['server_port'];

$options = [
    'http' => [
        'method' => 'POST',
    ],
];

// Create stream context
$context = stream_context_create($options);
$endpoint = "http://$serverUrl:$serverPort/reachable";

// Perform POST request
$response = file_get_contents($endpoint, false, $context);

// Display the response
echo $response;

?>

