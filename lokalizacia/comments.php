<?php
class Comments {
    private $conn;

    public function __construct($host, $user, $pass, $dbname) {
        $this->conn = new mysqli($host, $user, $pass, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        $this->conn->set_charset("utf8mb4");
    }

    public function getAllComments() {
        $sql = "SELECT user, comment, created_at FROM comments ORDER BY created_at DESC";
        $result = $this->conn->query($sql);

        $comments = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $comments[] = $row;
            }
        }
        return $comments;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

