<?php
require_once 'Comment.php';

class CommentRepository {
    private PDO $conn;

    public function __construct(Database $db) {
        $this->conn = $db->getConnection();
    }

    public function addComment(Comment $comment): bool {
        $stmt = $this->conn->prepare("INSERT INTO comments (user, comment, created_at) VALUES (:user, :comment, :created_at)");
        return $stmt->execute([
            ':user' => $comment->user,
            ':comment' => $comment->comment,
            ':created_at' => $comment->created_at
        ]);
    }

    public function getAllComments(): array {
        $stmt = $this->conn->query("SELECT * FROM comments ORDER BY created_at DESC");
        $comments = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $comments[] = new Comment($row);
        }

        return $comments;
    }
}
?>
