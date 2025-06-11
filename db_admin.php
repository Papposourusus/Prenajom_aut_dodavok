<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname;
    public $conn;

    public function __construct($dbname) {
        $this->dbname = $dbname;
        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die("Chyba pripojenia k DB ($this->dbname): " . $this->conn->connect_error);
        }
    }
}
?>
