<?php
require_once 'Comment.php';

class CommentRepository {
    private $conn;

    public function __construct($connection) {
        $this->conn = $connection;  // $connection je už PDO alebo mysqli
    }

    

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

?>
