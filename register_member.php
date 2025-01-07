<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $registerDate = date('Y-m-d H:i:s'); // Automatically set register date

    // Insert new member into the database
    $query = "INSERT INTO users (firstName, lastName, address, telephone, email, register_date, role)
              VALUES ('$firstName', '$lastName', '$address', '$telephone', '$email', '$registerDate', 'user')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['message'] = "Member registered successfully.";
    } else {
        $_SESSION['error'] = "Error registering member: " . $conn->error;
    }

    $conn->close();
    header("Location: users.php");
    exit();
}
?>
