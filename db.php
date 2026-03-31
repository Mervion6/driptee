<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

s
$host = getenv('DB_HOST') ?: "db";
$user = getenv('DB_USER') ?: "driptee_user"; 
$pass = getenv('DB_PASSWORD') ?: "UserPassword456!"; 
$db = getenv('DB_NAME') ?: "driptee_db";

try {
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $conn->set_charset("utf8mb4");
} catch (Exception $e) {
    die("Database Error: " . $e->getMessage());
}
?>
