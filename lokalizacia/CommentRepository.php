<?php
require_once 'Database.php';
require_once 'Comment.php';

class CommentRepository {
    private mysqli $conn;

    public function __construct(Database $database) {
        $this->conn = $database->getConnection();
    }

    public function save(Comment $comment): bool {
        $stmt = $this->conn->prepare("INSERT INTO comments (user, comment, created_at) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $comment->user, $comment->comment, $comment->created_at);
        return $stmt->execute();
    }

    public function getAll(): array {
        $result = $this->conn->query("SELECT * FROM comments ORDER BY created_at DESC");
        $comments = [];
        while ($row = $result->fetch_assoc()) {
            $comments[] = new Comment($row);
        }
        return $comments;
    }
}
?>
