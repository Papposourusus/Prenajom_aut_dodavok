<?php
class Database {
    private string $host = 'localhost';
    private string $db_name = 'auta';
    private string $username = 'root';
    private string $password = '';
    private PDO $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO {
        return $this->conn;
    }
}
?>
