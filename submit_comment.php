<?php
$host = 'localhost';
$db = 'website_comments';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Chyba pripojenia: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO comments (username, email, comment) VALUES (?, ?, ?)");
if (!$stmt) {
    die("Chyba v prepare: " . $conn->error);
}

$stmt->bind_param("sss", $name, $email, $message);
$stmt->execute();
$stmt->close();
$conn->close();

header("Location: kontakt.php"); // Alebo kam chceš presmerovať
exit;
?>
