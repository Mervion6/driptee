<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = getenv('DB_HOST') ?: "localhost";
$user =  getenv('DB_USER') ?: "root"; 
$pass =  getenv('DB_PASSWORD') ?: "root";  // ✅ FIXED: DB_PASSWORD not DB_PASS
$db   =  getenv('DB_NAME') ?: "driptee_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
