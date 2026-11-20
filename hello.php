<?php
// hello.php - returns data as JSON, not HTML
header('Content-Type: application/json'; charset=utf-8);

$response =[
    'message' => 'Hello from the server!',
    'student' => 'Chelsea ham Anga-angan',
    'course' => 'IPT 2',
    'time' => date('Y-m-d H:i:s')
];  

// return JSON response
echo json_encode($response, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
?>


