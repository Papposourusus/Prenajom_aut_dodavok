<?php 
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "Nemáte oprávnenie na zobrazenie tejto stránky.";
    exit();
}

// Pripojenie k databáze users (auta)
$conn_users = new mysqli("localhost", "root", "", "users");
if ($conn_users->connect_error) die("Chyba pripojenia k USERS: " . $conn_users->connect_error);  

// Pripojenie k databáze website_comments (komentáre)
$conn_comments = new mysqli("localhost", "root", "", "website_comments");
if ($conn_comments->connect_error) die("Chyba pripojenia k COMMENTS: " . $conn_comments->connect_error);  

// Odstránenie auta
if (isset($_POST['delete_vehicle'])) {
    $id = intval($_POST['vehicle_id']);
    $stmt = $conn_users->prepare("DELETE FROM auta WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Odstránenie komentára
if (isset($_POST['delete_comment'])) {
    $id = intval($_POST['comment_id']);
    $stmt = $conn_comments->prepare("DELETE FROM comments WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Získanie áut
$vehicles = $conn_users->query("SELECT * FROM auta");

// Získanie komentárov
$comments = $conn_comments->query("SELECT * FROM comments");
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Správa áut a komentárov</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f5f5f5; }
        .section { margin-bottom: 40px; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        h2 { margin-top: 0; }
        form { display: inline; }
        .delete-btn { background-color: #e74c3c; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 5px; }
        .delete-btn:hover { background-color: #c0392b; }
        img { border-radius: 5px; }
    </style>
</head>
<body>

<div class="section">
    <h2>🚗 Autá</h2>
    <table>
        <tr>
            <th>ID</th><th>Názov</th><th>Cena</th><th>Majiteľ</th><th>Rok</th><th>Obrázok</th><th>Akcia</th>
        </tr>
        <?php if ($vehicles): while ($row = $vehicles->fetch_assoc()): ?>
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
        <?php endwhile; else: ?>
        <tr><td colspan="7">Žiadne autá v databáze.</td></tr>
        <?php endif; ?>
    </table>
</div>

<div class="section">
    <h2>💬 Komentáre</h2>
    <table>
        <tr>
            <th>ID</th><th>ID Používateľa</th><th>ID Vozidla</th><th>Obsah</th><th>Dátum</th><th>Akcia</th>
        </tr>
        <?php if ($comments): while ($row = $comments->fetch_assoc()): ?>
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
