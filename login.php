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

    $sql = "SELECT * FROM users WHERE email='$login_username' OR username='$login_username' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($login_password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php"); 
            exit();
        } else {
            echo "Wrong password.";
        }
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>
