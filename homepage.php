<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Gym Homepage</title>
    
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/aboutus.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#classes">Membership</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pages">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="https://youtube.com" target="_blank"><i class="bi bi-youtube"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay">
            
        </div>
        <div class="hero-content">
            <h1>Shape Your Body</h1>
            <h2>Be Strong, Train Hard</h2>
            <p>Join us today and achieve your fitness goals with our professional trainers.</p>
            <a href="index.php" class="btn">Sign In</a>
        </div>
    </section>

    <section class="about">
        <div class="img-about">

        </div>
        <div class="des-about-1">
            <h2>About Us</h2>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-center py-3">
        <p class="mb-0">&copy; 2025 Gym Brand. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Xu3HIJBnB8/l6SEldBphH/h5YHLfu6VsInVZpPZwlzzTtmI1BxvjrLgg93jbxRkN" crossorigin="anonymous"></script>
</body>
</html>
