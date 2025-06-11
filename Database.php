<?php
$mysqli = new mysqli("localhost", "root", "", "auta"); 

if ($mysqli->connect_errno) {
    echo "Failed to connect: " . $mysqli->connect_error;
    exit();
}

$query = "SELECT * FROM auta";
$result = $mysqli->query($query);
?>