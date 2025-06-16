<?php
require_once 'CommentRepository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Prosím vyplňte všetky polia správne.");
    }

    $comment = new Comment([
        'username' => $name,
        'email' => $email,
        'text' => $message,
    ]);

    $repo = new CommentRepository();
    if ($repo->save($comment)) {
        header("Location: thank_you.php");
        exit();
    } else {
        echo "Nastala chyba pri ukladaní komentára.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
