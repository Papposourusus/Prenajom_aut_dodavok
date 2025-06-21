<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo 'Debug: Script začal';
session_start();

echo 'Session started.<br>';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Nemáte oprávnenie na zobrazenie tejto stránky.");
}

require_once 'db_admin.php'; 
require_once 'addCar\VehicleManager.php';
require_once 'Comment.php';

$db = new Database("auta");

$vehicleManager = new VehicleManager($db->getConnection());
$commentManager = new CommentManager($db->getConnection());



$autaDb = new Database("auta");
echo 'Database auta created.<br>';
$commentDb = new Database("auta"); // tá istá databáza, lebo máš auta a comments v jednej db
echo 'Database comments created.<br>';

$vehicleManager = new VehicleManager($autaDb->getConnection());
echo 'VehicleManager created.<br>';
$commentManager = new CommentManager($commentDb->getConnection());
echo 'CommentManager created.<br>';









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


echo 'About to get vehicles.<br>';

$vehicles = $vehicleManager->getAllVehicles();
$comments = $commentManager->getAllComments();


if ($vehicles) {
    echo 'Vehicles loaded.<br>';
} else {
    echo 'Vehicles NOT loaded.<br>';
}

?>
