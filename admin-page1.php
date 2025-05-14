<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "<h2 style='color: red; text-align:center; margin-top:50px;'>⛔ Nemáte oprávnenie na prístup k tejto stránke.</h2>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <title>Admin Page 1</title>
</head>
<body>
  <h1>Vitaj, admin!</h1>
  <p>Tu sú citlivé admin funkcie...</p>
</body>
</html>
