<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Nemáte oprávnenie na zobrazenie tejto stránky.");
}

require_once 'db_admin.php'; 
require_once 'CarManage/VehicleManager.php';
require_once 'CarManage/CommentManager.php';

$db = new Database("auta");

$vehicleManager = new VehicleManager($db->getConnection());
$commentManager = new CommentManager($db->getConnection());

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['delete_vehicle'])) {
        $vehicleManager->deleteVehicle((int)$_POST['vehicle_id']);
    } elseif (isset($_POST['delete_comment'])) {
        $commentManager->deleteComment((int)$_POST['comment_id']);
    } elseif (isset($_POST['update_vehicle'])) {
        $vehicleManager->updateVehicle(
            (int)$_POST['vehicle_id'],
            $_POST['title'],
            $_POST['image'],
            (float)$_POST['price_per_day'],
            $_POST['owner'],
            (int)$_POST['year']
        );
    }
}

$vehicles = $vehicleManager->getAllVehicles();
$comments = $commentManager->getAllComments();
?>
