<?php
// Nastavenie DB pripojenia
$host = 'localhost';
$db = 'website_comments';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $message = $_POST['message'] ?? '';

        // Validácia (môžeš si rozšíriť podľa potreby)
        if (!empty($name) && !empty($email) && !empty($message)) {
            $stmt = $pdo->prepare("INSERT INTO comments (user_id, username, comment) VALUES (?, ?, ?)");
            $stmt->execute([rand(1000, 9999), $name, $message]);

            // Presmerovanie späť, napr. na hlavnú alebo ďakovnú stránku
            header("Location: comments_page.php"); // Zmeň podľa potreby
            exit;
        } else {
            echo "Vyplňte všetky povinné polia.";
        }
    }
} catch (PDOException $e) {
    echo "Chyba: " . $e->getMessage();
}
?>
