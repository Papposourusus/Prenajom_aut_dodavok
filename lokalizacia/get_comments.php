<?php
require_once 'lokalizacia\CommentRepository.php';

$repo = new CommentRepository();
$comments = $repo->getAllComments();

header('Content-Type: application/json');
echo json_encode($comments);
