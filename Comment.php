<?php
class CommentManager {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function getAllComments() {
        return $this->conn->query("SELECT * FROM comments");
    }

    public function deleteComment($id) {
        $stmt = $this->conn->prepare("DELETE FROM comments WHERE id = ?");
        $stmt->execute([$id]);
    }
}
