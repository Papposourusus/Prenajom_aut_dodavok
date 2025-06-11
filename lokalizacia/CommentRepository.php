<?php
require_once __DIR__ . 'Database.php';

class CommentRepository
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAllComments()
    {
        $stmt = $this->conn->prepare("SELECT * FROM comments ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
