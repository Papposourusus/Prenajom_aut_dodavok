<?php
require_once 'Database.php';
require_once 'lokalizacia\get_comments.php';

class CommentRepository {
    private mysqli $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

  
    public function getAllComments(): array {
        $comments = [];
        $sql = "SELECT * FROM comments ORDER BY created_at DESC";
        $result = $this->conn->query($sql);

        if (!$result) {
            return [];
        }

        while ($row = $result->fetch_assoc()) {
            $comments[] = new Comment($row);
        }

        return $comments;
    }

   
    public function save(Comment $comment): bool {
        $stmt = $this->conn->prepare("INSERT INTO comments (username, comment, created_at) VALUES (?, ?, ?)");



        $stmt->bind_param("sss", $comment->username, $comment->comment, $comment->created_at);

        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }
}
?>
