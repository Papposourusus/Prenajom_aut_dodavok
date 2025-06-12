<?php
class VehicleManager {
    private $conn;

    public function __construct($dbConn) {
        $this->conn = $dbConn;
    }

    public function getAllVehicles() {
        return $this->conn->query("SELECT * FROM auta");
    }

    public function deleteVehicle($id) {
        $stmt = $this->conn->prepare("DELETE FROM auta WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }


    public function updateVehicle($id, $title, $image, $pricePerDay, $owner, $year): bool {
    $sql = "UPDATE vehicles SET title = ?, image = ?, price_per_day = ?, owner = ?, year = ? WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    if (!$stmt) {
        return false;
    }
    $stmt->bind_param("ssdsii", $title, $image, $pricePerDay, $owner, $year, $id);
    return $stmt->execute();
}
}





