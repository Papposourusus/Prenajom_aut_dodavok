<?php
class CommentManager {
    private $conn;

    public function __construct($dbConn) {
        $this->conn = $dbConn;
    }

    public function getAllComments() {
        return $this->conn->query("SELECT * FROM comments");
    }

    public function deleteComment($id) {
        $stmt = $this->conn->prepare("DELETE FROM comments WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
