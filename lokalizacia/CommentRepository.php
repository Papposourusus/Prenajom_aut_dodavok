<?php
require_once 'Comment.php';

class CommentRepository {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllComments(): array {
        $sql = "SELECT * FROM comments ORDER BY created_at DESC";
        $result = $this->conn->query($sql);

        $comments = [];
        while ($row = $result->fetch_assoc()) {
            $comments[] = new Comment($row);
        }
        return $comments;
    }
}
?>
