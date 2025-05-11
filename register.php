<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Chyba pripojenia: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['register_username']);
    $email = trim($_POST['register_email']);
    $password = password_hash($_POST['register_password'], PASSWORD_DEFAULT);

    // Skontroluj či už existuje používateľ
    $check = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $check->bind_param("ss", $username, $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $_SESSION['error_message'] = "Používateľ alebo email už existuje.";
    } else {
        $insert = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $insert->bind_param("sss", $username, $email, $password);
        if ($insert->execute()) {
            $_SESSION['success_message'] = "Registrácia úspešná! Môžete sa prihlásiť.";
        } else {
            $_SESSION['error_message'] = "Chyba pri registrácii.";
        }
    }

    header("Location: index.php");
    exit();
}

$conn->close();
?>
