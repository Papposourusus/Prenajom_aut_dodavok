<?php
session_start();
require_once 'db_admin.php';

class Login {
    public static function handle() {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            $_SESSION['error_message'] = "Neplatná požiadavka.";
            header("Location: index.php");
            exit();
        }

        $username = $_POST['login_username'] ?? '';
        $password = $_POST['login_password'] ?? '';

        try {
            $db = new Database();
            $conn = $db->connect();

            $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
            $stmt->execute(['username' => $username, 'email' => $username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role']; // admin alebo user
                $_SESSION['success_message'] = "Úspešné prihlásenie!";

                header("Location: index.php");
                exit();
            } else {
                $_SESSION['error_message'] = "Nesprávne meno alebo heslo.";
                header
