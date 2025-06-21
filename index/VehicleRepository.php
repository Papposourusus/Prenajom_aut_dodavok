<?php
require_once 'Database.php';
require_once 'index/Vehicle.php';

class VehicleRepository {
    private mysqli $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    /**
     * Načíta všetky vozidlá z tabuľky 'auta'.
     * @return Vehicle[] Pole objektov Vehicle
     */
    public function getAllVehicles(): array {
        $vehicles = [];
        $sql = "SELECT * FROM auta";
        $result = $this->conn->query($sql);

        if (!$result) {
            // Prípadná chybová hláška, napríklad logovanie
            return [];
        }

        while ($row = $result->fetch_assoc()) {
            $vehicles[] = new Vehicle($row);
        }

        return $vehicles;
    }
}
?>
