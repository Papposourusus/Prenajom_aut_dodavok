<?php
session_start();

echo 'Session started.<br>';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Nemáte oprávnenie na zobrazenie tejto stránky.");
}

require_once 'db_admin.php'; 
require_once 'addCar/VehicleManager.php';
require_once 'Comment.php';

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

<!DOCTYPE html>
<html lang="sk">
<head>
<meta charset="UTF-8">
<title>Správa áut a komentárov</title>
<style>
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    th { background-color: #f2f2f2; }
    img { max-width: 150px; height: auto; }
    form { margin: 0; }
    button { background-color: #e74c3c; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 3px; }
    button:hover { background-color: #c0392b; }
</style>
</head>
<body>

<h1>Správa áut a komentárov</h1>

<h2>Autá</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Názov</th>
        <th>Obrázok</th>
        <th>Cena za deň (€)</th>
        <th>Majiteľ</th>
        <th>Rok</th>
        <th>Akcie</th>
    </tr>
    <?php foreach ($vehicles as $vehicle): ?>
    <tr>
        <td><?= htmlspecialchars($vehicle['id']) ?></td>
        <td><?= htmlspecialchars($vehicle['title']) ?></td>
        <td><img src="assets/images/<?= htmlspecialchars($vehicle['image']) ?>" alt="Obrázok auta"></td>
        <td><?= htmlspecialchars($vehicle['price_per_day']) ?></td>
        <td><?= htmlspecialchars($vehicle['owner']) ?></td>
        <td><?= htmlspecialchars($vehicle['year']) ?></td>
        <td>
            <form method="post" onsubmit="return confirm('Naozaj chcete vymazať toto auto?');">
                <input type="hidden" name="vehicle_id" value="<?= $vehicle['id'] ?>">
                <button type="submit" name="delete_vehicle">Vymazať</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Komentáre</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Používateľ</th>
        <th>Email</th>
        <th>Komentár</th>
        <th>Dátum</th>
        <th>Akcie</th>
    </tr>
    <?php foreach ($comments as $comment): ?>
    <tr>
        <td><?= htmlspecialchars($comment['id']) ?></td>
        <td><?= htmlspecialchars($comment['username']) ?></td>
        <td><?= htmlspecialchars($comment['email']) ?></td>
        <td><?= htmlspecialchars($comment['comment']) ?></td>
        <td><?= htmlspecialchars($comment['created_at']) ?></td>
        <td>
            <form method="post" onsubmit="return confirm('Naozaj chcete vymazať tento komentár?');">
                <input type="hidden" name="comment_id" value="<?= $comment['id'] ?>">
                <button type="submit" name="delete_comment">Vymazať</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
