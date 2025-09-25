<?php
// Include the config file
$config = require __DIR__ . '/config.php';

$serverUrl = $config['server_url'];

// Create a GET request context
$get_context = stream_context_create(
        [
                'http' => [
                        'method' => 'GET',
                        'timeout' => 5,
                ],
        ]
);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-App</title>
</head>
<body>
<p><?php echo file_get_contents("$serverUrl/questions", false, $get_context) ?></p>
<p><?php echo file_get_contents("$serverUrl/questions/1", false, $get_context) ?></p>
<p><?php echo file_get_contents("$serverUrl/questions/number/1", false, $get_context) ?></p>
<p><?php echo file_get_contents("$serverUrl/answers/1", false, $get_context) ?></p>
<p><?php echo file_get_contents("$serverUrl/answers/questions/1", false, $get_context) ?></p>
</body>
