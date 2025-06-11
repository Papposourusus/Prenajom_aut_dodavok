<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name;
    public $conn;

    public function __construct($db_name) {
        $this->db_name = $db_name;
        $this->connect();
    }

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        if ($this->conn->connect_error) {
            die("Chyba pripojenia k DB (" . $this->db_name . "): " . $this->conn->connect_error);
        }
    }
}
?>
