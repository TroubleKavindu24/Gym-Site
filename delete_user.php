<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']); // Get the user ID securely

    // SQL query to delete the user
    $query = "DELETE FROM users WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['message'] = "User deleted successfully.";
    } else {
        $_SESSION['error'] = "Error deleting user: " . $conn->error;
    }

    $conn->close();

    // Redirect back to users.php with a message
    header("Location: users.php");
    exit();
} else {
    header("Location: users.php");
    exit();
}
?>
