<?php
session_start();
require_once 'db_admin.php';

class Register {
    public static function handle() {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            $_SESSION['error_message'] = "Neplatná požiadavka.";
            header("Location: index.php");
            exit();
        }

        $username = trim($_POST['register_username'] ?? '');
        $email = trim($_POST['register_email'] ?? '');
        $password = $_POST['register_password'] ?? '';

        if (empty($username) || empty($email) || empty($password)) {
            $_SESSION['error_message'] = "Vyplňte všetky polia.";
            header("Location: index.php");
            exit();
        }

        try {
            $db = new Database();
            $conn = $db->connect();

            // Skontroluj, či už používateľ existuje podľa mena alebo emailu
            $stmt = $conn->prepare("SELECT id FROM users WHERE username = :username OR email = :email");
            $stmt->execute(['username' => $username, 'email' => $email]);

            if ($stmt->fetch()) {
                $_SESSION['error_message'] = "Používateľ s daným menom alebo emailom už existuje.";
                header("Location: index.php");
                exit();
            }

            // Hashovanie hesla
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Vloženie nového používateľa s rolou 'user'
            $stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, 'user')");
            $stmt->execute([
                'username' => $username,
                'email' => $email,
                'password' => $hashedPassword
            ]);

            $_SESSION['success_message'] = "Registrácia úspešná. Môžete sa prihlásiť.";
            header("Location: index.php");
            exit();

        } catch (PDOException $e) {
            $_SESSION['error_message'] = "Chyba databázy: " . $e->getMessage();
            header("Location: index.php");
            exit();
        }
    }
}

Register::handle();
