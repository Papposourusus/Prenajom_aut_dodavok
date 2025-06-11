<?php

class VehicleManager {
    private $conn;

    public function __construct($host, $user, $password, $database) {
        $this->conn = new mysqli($host, $user, $password, $database);
        if ($this->conn->connect_error) {
            die("Chyba DB: " . $this->conn->connect_error);
        }
    }

    public function addVehicle($title, $price, $owner, $year, $imageFile) {
        $imageName = basename($imageFile['name']);
        $imageTmp = $imageFile['tmp_name'];
        $uploadPath = "assets/images/" . $imageName;

        if (move_uploaded_file($imageTmp, $uploadPath)) {
            $stmt = $this->conn->prepare("INSERT INTO auta (title, image, price_per_day, owner, year) VALUES (?, ?, ?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("ssdsi", $title, $imageName, $price, $owner, $year);
                $result = $stmt->execute();
                $stmt->close();
                return $result;
            }
        }
        return false;
    }
}
