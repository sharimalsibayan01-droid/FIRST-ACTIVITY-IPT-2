<?php
// hello.php - returns data as JSON, not HTML
header('content-type: application/json');

$response = [
    'message' => 'hello from the server!',
    'student' => 'sharimal sibayan',
    'course' => 'ipt 2',
    'time' => date('y-m-d h:i:s')

];
echo json_encode($response);