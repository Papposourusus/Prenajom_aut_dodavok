<?php
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
        echo "Registration successful. You can now login.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
