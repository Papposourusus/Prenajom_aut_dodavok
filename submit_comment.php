<?php
require_once 'Comment.php';
require_once 'lokalizacia\CommentRepository.php';
require_once 'Database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['name'] ?? '');
    $commentText = trim($_POST['message'] ?? '');

    if ($user === '' || $commentText === '') {
        die('Vyplňte prosím všetky povinné polia.');
    }

    $db = new Database();
    $commentRepo = new CommentRepository($db);

    $comment = new Comment([
        'user' => $user,
        'comment' => $commentText,
        'created_at' => date('Y-m-d H:i:s')
    ]);

    if ($commentRepo->addComment($comment)) {
        header('Location: index.php?success=1');
        exit;
    } else {
        die('Nastala chyba pri ukladaní komentára.');
    }
} else {
    die('Neplatná žiadosť.');
}

