<?php
class Database {
    private $host = "localhost";
    private $db_name = "auta";
    private $username = "root"; 
    private $password = "";
    private $conn;

    public function __construct($db_name = "auta") {
        $this->db_name = $db_name;
    }

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e) {
            die("Chyba pripojenia: " . $e->getMessage());
        }
    }

    public function getConnection() {
        if (!$this->conn) {
            $this->connect();
        }
        return $this->conn;
    }
}
?>
