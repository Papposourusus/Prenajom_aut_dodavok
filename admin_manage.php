<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Nemáte oprávnenie na zobrazenie tejto stránky.");
}

require_once 'db_admin.php';
require_once 'CarManage\VehicleManager.php';
require_once 'CarManage\CommentManager.php';

// Inicializuj databázy
$autaDb = new Database("auta");
$commentDb = new Database("website_comments");

// Inicializuj manažérov
$vehicleManager = new VehicleManager($autaDb->getConnection());
$commentManager = new CommentManager($commentDb->getConnection());

// Spracuj mazanie
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['delete_vehicle'])) {
        $vehicleManager->deleteVehicle((int)$_POST['vehicle_id']);
    } elseif (isset($_POST['delete_comment'])) {
        $commentManager->deleteComment((int)$_POST['comment_id']);
    }
}

// Získaj dáta
$vehicles = $vehicleManager->getAllVehicles();
$comments = $commentManager->getAllComments();


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
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Správa áut a komentárov</title>

    <link rel="stylesheet" href="CarManage\admin_manage.css">

</head>
<body>

<div class="section">
    <h2>🚗 Autá</h2>
    <table>
        <tr><th>ID</th><th>Názov</th><th>Obrázok</th><th>Cena</th><th>Majiteľ</th><th>Rok</th><th>Náhľad</th><th>Akcia</th></tr>
        <?php if ($vehicles && $vehicles->num_rows > 0): while ($row = $vehicles->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['image']) ?></td>
            <td><?= htmlspecialchars($row['price_per_day']) ?>€</td>
            <td><?= htmlspecialchars($row['owner']) ?></td>
            <td><?= htmlspecialchars($row['year']) ?></td>
            <td><img src="assets/images/<?= htmlspecialchars($row['image']) ?>" width="100"></td>
            <td>
                <form method="post">
                    <input type="hidden" name="vehicle_id" value="<?= $row['id'] ?>">
                    <button type="submit" name="delete_vehicle" class="delete-btn">Vymazať</button>
                    <td>
    <form method="post">
        <input type="hidden" name="vehicle_id" value="<?= $row['id'] ?>">
        <input type="text" name="title" value="<?= htmlspecialchars($row['title']) ?>" required>
        <input type="text" name="image" value="<?= htmlspecialchars($row['image']) ?>" required>
        <input type="number" name="price_per_day" step="0.01" value="<?= htmlspecialchars($row['price_per_day']) ?>" required>
        <input type="text" name="owner" value="<?= htmlspecialchars($row['owner']) ?>" required>
        <input type="number" name="year" value="<?= htmlspecialchars($row['year']) ?>" required>
        <button type="submit" name="update_vehicle">Uložiť zmeny</button>
    </form>
</td>

                </form>
            </td>
        </tr>
        <?php endwhile; else: ?>
        <tr><td colspan="8">Žiadne autá v databáze.</td></tr>
        <?php endif; ?>
    </table>
</div>

<div class="section">
    <h2>💬 Komentáre</h2>
    <table>
        <tr><th>ID</th><th>Používateľ</th><th>Email</th><th>Komentár</th><th>Dátum</th><th>Akcia</th></tr>
        <?php if ($comments && $comments->num_rows > 0): while ($row = $comments->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['username']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['comment']) ?></td>
            <td><?= htmlspecialchars($row['created_at']) ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="comment_id" value="<?= $row['id'] ?>">
                    <button type="submit" name="delete_comment" class="delete-btn">Vymazať</button>
                </form>
            </td>
        </tr>
        <?php endwhile; else: ?>
        <tr><td colspan="6">Žiadne komentáre v databáze.</td></tr>
        <?php endif; ?>
    </table>
</div>




</body>
</html>
