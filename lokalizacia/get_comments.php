<?php
require_once 'Comment.php';
require_once 'lokalizacia\CommentRepository.php.php';
require_once 'Database.php';

$repo = new CommentRepository(new Database());
$comments = $repo->getAll();

foreach ($comments as $comment) {
    echo "<p><strong>" . htmlspecialchars($comment->user) . ":</strong> " . htmlspecialchars($comment->comment) . " <em>(" . $comment->created_at . ")</em></p>";
}
?>
