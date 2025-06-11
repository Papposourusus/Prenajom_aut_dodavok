<?php
$servername = "localhost";
$username = "root";    
$password = "";       
$dbname = "website_comments";  


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM comments ORDER BY id DESC"; 
$result = $conn->query($sql);

$comments = [];

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $comments[] = $row;
  }
}


header('Content-Type: application/json');
echo json_encode($comments);

$conn->close();
?>
