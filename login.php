<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_username = $_POST['login_username'];
    $login_password = $_POST['login_password'];

    $sql = "SELECT * FROM users WHERE username='$login_username' OR email='$login_username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        if (password_verify($login_password, $row['password'])) {
            $_SESSION['username'] = $row['username']; // Tu nastavíme session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['success_message'] = "Úspešné prihlásenie!";
            header("Location: index.php"); // alebo na tvoju stránku
            exit();
        } else {
            $_SESSION['error_message'] = "Nesprávne heslo.";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['error_message'] = "Používateľ nenájdený.";
        header("Location: index.php");
        exit();
    }
}

$conn->close();
?>
