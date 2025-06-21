<?php
require_once 'Database.php'; 
require_once 'lokalizacia/CommentRepository.php';
require_once 'Comment.php';


$dbInstance = new Database();
$conn = $dbInstance->connect();  

$commentRepo = new CommentRepository($conn);

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
