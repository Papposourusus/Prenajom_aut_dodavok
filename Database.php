<?php
class Database {
    private string $host = 'localhost';
    private string $user = 'root';
    private string $password = '';
    private string $dbName = 'auta';

    private mysqli $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbName);

        if ($this->conn->connect_error) {
            die("Database connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection(): mysqli {
        return $this->conn;
    }
}
?>
