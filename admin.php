<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php"); // Redirect to login if not admin
    exit();
}

// Get the page parameter to load the appropriate content
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard'; // Default to 'dashboard'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            text-decoration: none;
            font-size: 18px;
            color: white;
            padding: 15px;
            display: block;
            text-align: left;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        h1 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="?page=dashboard">Dashboard</a>
        <a href="?page=users">Users</a>
        <a href="?page=admin_settings">Admin Settings</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <?php
        // Dynamically include the relevant page based on the selected option
        if ($page === 'dashboard') {
            include 'dashboard.php';
        } elseif ($page === 'users') {
            include 'users.php';
        } elseif ($page === 'admin_settings') {
            include 'admin_settings.php';
        } else {
            echo "<h1>Page not found</h1>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Xu3HIJBnB8/l6SEldBphH/h5YHLfu6VsInVZpPZwlzzTtmI1BxvjrLgg93jbxRkN" crossorigin="anonymous"></script>
</body>
</html>
