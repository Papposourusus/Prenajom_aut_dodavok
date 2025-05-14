<?php

$_SESSION['username'] = $row['username'];
$_SESSION['user_id'] = $row['id'];
$_SESSION['role'] = $row['role']; 

session_start();
$conn = new mysqli("localhost", "root", "", "users");

if ($conn->connect_error) die("Chyba pripojenia: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            echo "Nesprávne heslo.";
        }
    } else {
        echo "Používateľ nenájdený.";
    }

    $stmt->close();
}
$conn->close();
?>
