<?php
class VehicleManager {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function getAllVehicles() {
        return $this->conn->query("SELECT * FROM auta");
    }

    public function deleteVehicle($id) {
        $stmt = $this->conn->prepare("DELETE FROM auta WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function updateVehicle($id, $title, $image, $price, $owner, $year) {
        $stmt = $this->conn->prepare("UPDATE auta SET title = ?, image = ?, price_per_day = ?, owner = ?, year = ? WHERE id = ?");
        $stmt->execute([$title, $image, $price, $owner, $year, $id]);
    }
}
