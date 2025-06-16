<?php
require_once 'Comment.php';
require_once 'lokalizacia/CommentRepository.php';  // opravená cesta
require_once 'Database.php';

header('Content-Type: application/json');

$db = new Database();
$conn = $db->connect();  // mysqli spojenie

$commentRepo = new CommentRepository($conn);  // musí pracovať s mysqli
$comments = $commentRepo->getAllComments();

echo json_encode($comments);

$db->disconnect();
?>
