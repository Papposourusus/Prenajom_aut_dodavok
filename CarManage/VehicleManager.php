<?php
class VehicleManager {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllVehicles() {
        return $this->conn->query("SELECT * FROM auta");
    }

    public function deleteVehicle($id) {
        $stmt = $this->conn->prepare("DELETE FROM auta WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
