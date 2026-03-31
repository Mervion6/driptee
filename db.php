<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = "dpg-xxxxxx-a.oregon-postgres.render.com";
$user = "driptee_user";                          
$pass = "your_strong_password";               
$db   = "driptee_db";                            

// Use this for PostgreSQL (Render's default free DB)
$conn = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// OR keep using mysqli if you found a free MySQL host (like Aiven.io):
// $conn = new mysqli($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed");
}
?>
