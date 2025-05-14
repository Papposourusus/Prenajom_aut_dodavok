<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    die("Nemáš oprávnenie.");
}

$conn = new mysqli("localhost", "root", "", "users");
if ($conn->connect_error) die("Chyba DB.");

// Vymazanie auta
if (isset($_GET['delete_car'])) {
    $id = $_GET['delete_car'];
    $conn->query("DELETE FROM cars WHERE id = $id");
}

// Vymazanie komentára
if (isset($_GET['delete_comment'])) {
    $id = $_GET['delete_comment'];
    $conn->query("DELETE FROM comments WHERE id = $id");
}

// Výpis áut
$cars = $conn->query("SELECT * FROM cars");
while ($car = $cars->fetch_assoc()) {
    echo "<p>{$car['title']} <a href='?delete_car={$car['id']}'>Odstrániť</a></p>";
}

// Výpis komentárov
$comments = $conn->query("SELECT * FROM comments");
while ($comment = $comments->fetch_assoc()) {
    echo "<p>{$comment['content']} <a href='?delete_comment={$comment['id']}'>Odstrániť</a></p>";
}
?>


