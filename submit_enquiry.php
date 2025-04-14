<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$place = $_POST['place'];

$stmt = $conn->prepare("INSERT INTO enquiries (name, email, message, destination) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $message, $place);
$stmt->execute();

echo "<h3 style='color: white; text-align:center;'>Enquiry submitted successfully!</h3>";
?>