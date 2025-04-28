<?php
session_start(); // na začiatku každej stránky kde používaš $_SESSION

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $register_username = $_POST['register_username'];
    $register_email = $_POST['register_email'];
    $register_password = password_hash($_POST['register_password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$register_username', '$register_email', '$register_password')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Registrácia prebehla úspešne! Teraz sa môžeš prihlásiť.";
        header("Location: index.php"); // sem daj svoju hlavnú stránku
        exit();
    } else {
        $_SESSION['error_message'] = "Chyba pri registrácii: " . $conn->error;
        header("Location: index.php"); // aj pri chybe späť
        exit();
    }
}

$conn->close();
?>
