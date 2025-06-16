<?php
require_once 'Comment.php';
require_once 'lokalizacia\CommentRepository.php.php';
require_once 'Database.php';

header('Content-Type: application/json');

$db = new Database();
$conn = $db->connect();

$commentRepo = new CommentRepository($conn);
$comments = $commentRepo->getAllComments();

echo json_encode($comments);

$db->disconnect();
?>
