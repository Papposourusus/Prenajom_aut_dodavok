<?php
require_once 'lokalizacia\CommentRepository.php';

$repo = new CommentRepository();
$comments = $repo->getAllComments();

foreach ($comments as $comment) {
    echo "<div class='comment'>";
    echo "<h5>" . htmlspecialchars($comment->username) . " <small>(" . htmlspecialchars($comment->email) . ")</small></h5>";
    echo "<p>" . nl2br(htmlspecialchars($comment->text)) . "</p>";
    echo "<small>" . $comment->created_at . "</small>";
    echo "</div>";
}
?>
