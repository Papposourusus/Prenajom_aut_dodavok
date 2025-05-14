<?php
session_start();

// Kontrola, či je admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Nemáš oprávnenie pristupovať sem.");
}

$conn = new mysqli("localhost", "root", "", "users");
if ($conn->connect_error) die("Chyba DB: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $owner = $_POST['owner'];
    $year = $_POST['year'];

    // Uloženie obrázku
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "assets/images/" . $image_name);

    $stmt = $conn->prepare("INSERT INTO vehicles (title, image, price_per_day, owner, year) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdsi", $title, $image_name, $price, $owner, $year);

    if ($stmt->execute()) {
        echo "Auto bolo pridané.";
    } else {
        echo "Chyba: " . $stmt->error;
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <label>Názov auta:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Cena na deň (€):</label><br>
    <input type="number" name="price" step="0.01" required><br><br>

    <label>Majiteľ:</label><br>
    <input type="text" name="owner" required><br><br>

    <label>Rok výroby:</label><br>
    <input type="number" name="year" min="1900" max="2099" required><br><br>

    <label>Obrázok (jpg/png):</label><br>
    <input type="file" name="image" accept="image/*" required><br><br>

    <button type="submit">Pridať vozidlo</button>
</form>
