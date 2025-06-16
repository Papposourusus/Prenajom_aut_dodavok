<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auta";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(['error' => 'Database connection failed']);
    exit;
}

$conn->set_charset("utf8mb4");

$sql = "SELECT id, user, comment, created_at FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

$comments = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
    $result->free();
}

$conn->close();

echo json_encode($comments);
?>
