<?php
// Include the config file
$config = require __DIR__ . '/config.php';

$serverUrl = $config['server_url'];

// Create a POST request context
$post_context = stream_context_create(
    [
        'http' => [
            'method' => 'POST',
            'timeout' => 5,
        ],
    ]
);

if (str_contains(file_get_contents("$serverUrl/reachable", false, $post_context), "Server is reachable")) {
    http_response_code(200);
} else {
    http_response_code(503);
}

echo "Healthcheck completed";
