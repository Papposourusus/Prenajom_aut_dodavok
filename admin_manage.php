<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Nemáš oprávnenie pristupovať sem.");
}

require_once 'db_admin.php';
require_once 'CarManage/VehicleManager.php';
require_once 'CarManage/CommentManager.php';

// Pripojenie k databázam
$autaDB = new Database('auta');
$commentsDB = new Database('website_comments');

$vehicleManager = new VehicleManager($autaDB->conn);
$commentManager = new CommentManager($commentsDB->conn);

// Mazanie záznamov
if (isset($_POST['delete_vehicle'])) {
    $vehicleManager->deleteVehicle((int)$_POST['vehicle_id']);
}
if (isset($_POST['delete_comment'])) {
    $commentManager->deleteComment((int)$_POST['comment_id']);
}

// Načítanie dát
$vehicles = $vehicleManager->getAllVehicles();
$comments = $commentManager->getAllComments();
?>
