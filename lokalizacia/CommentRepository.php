<?php
require_once 'Comment.php';

class CommentRepository {
    private $conn; // mysqli objekt

    public function __construct(mysqli $connection) {
        $this->conn = $connection;
    }

    public function addComment(Comment $comment): bool {
        $stmt = $this->conn->prepare("INSERT INTO comments (user, comment, created_at) VALUES (?, ?, ?)");
        if (!$stmt) {
            return false; // chyba pri príprave
        }
        $stmt->bind_param("sss", $comment->user, $comment->comment, $comment->created_at);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function getAllComments(): array {
        $result = $this->conn->query("SELECT * FROM comments ORDER BY created_at DESC");
        $comments = [];

        while ($row = $result->fetch_assoc()) {
            $comments[] = new Comment($row);
        }

        return $comments;
    }
}
?>
