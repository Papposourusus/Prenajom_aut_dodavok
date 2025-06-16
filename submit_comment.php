<?php
require_once 'Comment.php';
require_once 'lokalizacia\CommentRepository.php';
require_once 'Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['name'] ?? '';
    $commentText = $_POST['message'] ?? '';

    if ($user && $commentText) {
        $comment = new Comment([
            'user' => $user,
            'comment' => $commentText,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        $repo = new CommentRepository(new Database());

        if ($repo->save($comment)) {
            header('Location: index.php?success=1');
            exit;
        } else {
            echo "Nastala chyba pri ukladaní komentára.";
        }
    } else {
        echo "Vyplňte všetky polia.";
    }
}
?>
