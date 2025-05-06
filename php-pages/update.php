<?php

session_start();
include('connection.php');

// Get values from the form
$firstName = $_POST['firstName'] ?? '';
$lastName  = $_POST['lastName'] ?? '';
$age       = $_POST['age'] ?? '';
$phone     = $_POST['phone'] ?? '';
$email     = $_POST['email'] ?? '';

// You can either use email from form or session:
$validuser = $_SESSION['validUser'] ?? $email; // fallback to form value if session not set

// Update the record in the database
$sql = "UPDATE contacts 
        SET firstName='$firstName', 
            lastName='$lastName', 
            age='$age', 
            phone='$phone' 
        WHERE email = '$validuser' LIMIT 1";

if ($conn->query($sql) === TRUE) {
    echo "Records Updated";
} else {
    echo "Error updating records: " . $conn->error;
}

$conn->close();

