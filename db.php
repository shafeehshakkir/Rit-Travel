<?php
$host = "localhost";
$db = "travel_db";
$user = "root";
$pass = "Shafeeh@585";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>