<?php
require_once 'Database.php';
require_once 'index\Vehicle.php';

class VehicleRepository {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllVehicles() {
        $vehicles = [];
        $result = $this->conn->query("SELECT * FROM auta");
        while ($row = $result->fetch_assoc()) {
            $vehicles[] = new Vehicle($row);
        }
        return $vehicles;
    }
}
?>
