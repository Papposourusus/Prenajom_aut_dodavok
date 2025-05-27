<?php
$servername = "localhost";
$username = "root";    // Pri XAMPP-e je root
$password = "";        // Bez hesla (ak nemáš nastavené)
$dbname = "website_comments";  // Tvoja databáza

// Pripojenie k databáze
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola pripojenia
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Výber komentárov
$sql = "SELECT * FROM comments ORDER BY id DESC"; 
$result = $conn->query($sql);

$comments = [];

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $comments[] = $row;
  }
}

// Vrátime výsledok ako JSON
header('Content-Type: application/json');
echo json_encode($comments);

$conn->close();
?>
