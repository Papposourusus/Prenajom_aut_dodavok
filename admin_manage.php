<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "Nemáte oprávnenie na zobrazenie tejto stránky.";
    exit();
}

$conn = new mysqli("localhost", "root", "", "users");
if ($conn->connect_error) die("Chyba pripojenia: " . $conn->connect_error);

// Odstránenie auta
if (isset($_POST['delete_vehicle'])) {
    $id = intval($_POST['vehicle_id']);
    $stmt = $conn->prepare("DELETE FROM vehicles WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Odstránenie komentára
if (isset($_POST['delete_comment'])) {
    $id = intval($_POST['comment_id']);
    $stmt = $conn->prepare("DELETE FROM comments WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Získanie áut
$vehicles = $conn->query("SELECT * FROM auta");

// Získanie komentárov
$comments = $conn->query("SELECT * FROM comments");

?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Správa áut a komentárov</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .section { margin-bottom: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        h2 { margin-top: 0; }
        form { display: inline; }
        .delete-btn { background-color: #e74c3c; color: white; border: none; padding: 5px 10px; cursor: pointer; }
    </style>
</head>
<body>

<div class="section">
    <h2>🚗 Autá</h2>
    <table>
        <tr>
            <th>ID</th><th>Názov</th><th>Cena</th><th>Majiteľ</th><th>Rok</th><th>Obrázok</th><th>Akcia</th>
        </tr>
        <?php while ($row = $vehicles->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['price_per_day']) ?>€</td>
            <td><?= htmlspecialchars($row['owner']) ?></td>
            <td><?= htmlspecialchars($row['year']) ?></td>
            <td><img src="<?= htmlspecialchars($row['image']) ?>" width="100"></td>
            <td>
                <form method="post">
                    <input type="hidden" name="vehicle_id" value="<?= $row['id'] ?>">
                    <button type="submit" name="delete_vehicle" class="delete-btn">Vymazať</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<div class="section">
    <h2>💬 Komentáre</h2>
    <table>
        <tr>
            <th>ID</th><th>ID Používateľa</th><th>ID Vozidla</th><th>Obsah</th><th>Dátum</th><th>Akcia</th>
        </tr>
        <?php while ($row = $comments->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['user_id'] ?></td>
            <td><?= $row['vehicle_id'] ?></td>
            <td><?= htmlspecialchars($row['content']) ?></td>
            <td><?= $row['created_at'] ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="comment_id" value="<?= $row['id'] ?>">
                    <button type="submit" name="delete_comment" class="delete-btn">Vymazať</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
