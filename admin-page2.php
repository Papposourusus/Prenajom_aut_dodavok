<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "<h2 style='color: red; text-align:center; margin-top:50px;'>⛔ Nemáte oprávnenie na prístup k tejto stránke.</h2>";
    exit();
}
?>