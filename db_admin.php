<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db;
    public $conn;

    public function __construct($db) {
        $this->db = $db;
        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Chyba pripojenia k DB ($this->db): " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
