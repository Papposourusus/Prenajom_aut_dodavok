<?php
require_once 'database.php'; // súbor, kde je tvoja Database trieda
require_once 'lokalizacia/CommentRepository.php';
require_once 'Comment.php';

// vytvorenie inštancie pripojenia
$dbInstance = new Database();
$conn = $dbInstance->getConnection(); // musíš mať takú metódu, ktorá vráti mysqli alebo PDO

$commentRepo = new CommentRepository($conn);

// použitie Comment objektu podľa post dát
$comment = new Comment([
    'user' => $_POST['name'],
    'comment' => $_POST['message'],
    'created_at' => date('Y-m-d H:i:s')
]);

if ($commentRepo->addComment($comment)) {
    echo "Komentár bol uložený.";
} else {
    echo "Nastala chyba pri ukladaní komentára.";
}
?>

