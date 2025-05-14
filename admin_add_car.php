<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    die("Nemáš oprávnenie.");
}

$conn = new mysqli("localhost", "root", "", "users");
if ($conn->connect_error) die("Chyba DB.");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image']; // napr. cesta k obrázku v assets

    $stmt = $conn->prepare("INSERT INTO cars (title, description, image, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $title, $description, $image, $price);
    $stmt->execute();
    echo "Auto bolo pridané!";
}
?>

<form method="POST">
    <input name="title" placeholder="Názov auta" required>
    <textarea name="description" placeholder="Popis" required></textarea>
    <input name="image" placeholder="Cesta k obrázku" required>
    <input name="price" type="number" step="0.01" placeholder="Cena za deň" required>
    <button type="submit">Pridať auto</button>
</form>
