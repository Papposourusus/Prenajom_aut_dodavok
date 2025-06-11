<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    exit("Nemáte oprávnenie na zobrazenie tejto stránky.");
}

require_once 'db_admin.php';
require_once 'CarManage\VehicleManager.php';
require_once 'CarManage\CommentManager.php';

// Inicializuj databázy
$dbAuta = new Database("auta");
$dbComments = new Database("website_comments");

// Inicializuj správcov
$vehicleManager = new VehicleManager($dbAuta->conn);
$commentManager = new CommentManager($dbComments->conn);

// Spracovanie mazania
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['delete_vehicle'])) {
        $vehicleManager->deleteVehicle((int)$_POST['vehicle_id']);
    }

    if (isset($_POST['delete_comment'])) {
        $commentManager->deleteComment((int)$_POST['comment_id']);
    }
}

// Získaj dáta
$vehicles = $vehicleManager->getAllVehicles();
$comments = $commentManager->getAllComments();
?>
