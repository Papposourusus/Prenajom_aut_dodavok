<?php
class Database {
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "auta";
    private ?mysqli $conn = null;

    public function connect(): mysqli {
        if ($this->conn === null) {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            $this->conn->set_charset("utf8mb4");
        }
        return $this->conn;
    }

    public function disconnect(): void {
        if ($this->conn !== null) {
            $this->conn->close();
            $this->conn = null;
        }
    }
}
?>
