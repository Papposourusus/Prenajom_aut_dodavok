<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Nemáš oprávnenie pristupovať sem.");
}

require_once 'addCar/VehicleManager.php';

$vehicleManager = new VehicleManager("localhost", "root", "", "auta");

$message = '';
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $success = $vehicleManager->addVehicle(
        $_POST['title'],
        $_POST['price'],
        $_POST['owner'],
        $_POST['year'],
        $_FILES['image']
    );

    $message = $success ? "Auto bolo úspešne pridané." : "Chyba pri nahrávaní auta.";
}

include 'addCar/addVehicleForm.php';
?>
