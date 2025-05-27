<?php
$conn = new mysqli("localhost", "root", "", "users");

if ($conn->connect_error) die("Chyba pripojenia: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['register_username'];
    $email = $_POST['register_email'];
    $password = password_hash($_POST['register_password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Registrácia úspešná.";
    } else {
        echo "Používateľ alebo email už existuje.";
    }

    $stmt->close();
}
$conn->close();
?>
