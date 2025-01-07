<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation Bar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#memberships">Membership</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
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
<section class="hero" id="home">
    <div class="hero-overlay"></div>
    <div class="hero-content hero-animation">
        <h1>FitZone-Fitness Center</h1>
        <h2>Be Strong, Train Hard</h2>
        <p>Join us today and achieve your fitness goals with our professional trainers.</p>
        <a href="index.php" class="btn">Sign In</a>
    </div>
</section>


    <!-- About Us Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image 1 -->
                <div class="col-md-6">
                    <div class="img-about-1 animate-left"></div>
                </div>
                <!-- Description 1 -->
                <div class="col-md-6">
                    <div class="des-about-1">
                        <h2 class="text-dark">About Us</h2>
                        <div class="fw-bold mb-3">
                            POWER UP YOUR FITNESS WITH POWER WORLD GYMS
                        </div>
                        <div>
                            Power World Gyms pioneered the Sri Lankan gym industry in 1994 and has remained the largest chain of fitness centres since its inception, earning an undisputed reputation among fitness enthusiasts.
                        </div>
                    </div>
                </div>
                <!-- Description 2 -->
                <div class="col-md-6">
                    <div class="des-about-1">
                        <h2 class="text-dark">Our Vision</h2>
                        <div class="fw-bold mb-3">
                            OUR VISION
                        </div>
                        <div>
                            Our vision is to bring our fitness centres to you. We currently operate a chain of 24 fitness centres, serving over 25,000 members in Colombo and its suburbs. With over 100,000 sq ft of gym space, Power World offers an expansive fitness experience.
                        </div>
                    </div>
                </div>
                <!-- Image 2 -->
                <div class="col-md-6">
                    <div class="img-about-2 animate-right"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Memberships Section -->
    <section class="memberships" id="memberships">
    <div class="container py-5">
        <h2 class="text-center text-dark mb-4">Memberships</h2>

        <!-- Row 1: Basic and Standard -->
        <div class="row g-4">
            <div class="col-md-6">
                <div class="membership-box text-dark basic-box">
                    <h3>Basic</h3>
                    <p>Access to gym equipment and facilities during off-peak hours.</p>
                    <p><strong>Price:</strong> $20/month</p>
                    <a href="register.php?membership=basic" class="btn btn-primary">Register</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="membership-box text-dark standard-box">
                    <h3>Standard</h3>
                    <p>Full access to all gym equipment, facilities, and group classes.</p>
                    <p><strong>Price:</strong> $40/month</p>
                    <a href="register.php?membership=standard" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>

        <!-- Row 2: Premium and VIP -->
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="membership-box text-dark premium-box">
                    <h3>Premium</h3>
                    <p>Includes Standard benefits + access to personal trainers and sauna.</p>
                    <p><strong>Price:</strong> $60/month</p>
                    <a href="register.php?membership=premium" class="btn btn-primary">Register</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="membership-box text-dark vip-box">
                    <h3>VIP</h3>
                    <p>All Premium benefits + priority access, exclusive events, and discounts.</p>
                    <p><strong>Price:</strong> $100/month</p>
                    <a href="register.php?membership=vip" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Services Section -->
<section class="services" id="services">
    <div class="container py-5">
        <h2 class="text-center text-dark mb-4">Our Services</h2>
        <p class="text-center text-muted mb-5">
            Explore our wide range of services designed to help you achieve your fitness goals.
        </p>
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="service-box text-center p-4">
                    <i class="bi bi-person-badge service-icon"></i>
                    <h4>Personal Training</h4>
                    <p>Get personalized fitness programs tailored to your goals with our expert trainers.</p>
                    <a href="services.php?service=personal-training" class="btn btn-outline-primary mt-3">Learn More</a>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4">
                <div class="service-box text-center p-4">
                    <i class="bi bi-group service-icon"></i>
                    <h4>Group Classes</h4>
                    <p>Join fun and energetic group classes, including aerobics, Zumba, and more.</p>
                    <a href="services.php?service=group-classes" class="btn btn-outline-primary mt-3">Learn More</a>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4">
                <div class="service-box text-center p-4">
                    <i class="bi bi-emoji-sunglasses service-icon"></i>
                    <h4>Yoga & Meditation</h4>
                    <p>Relax and rejuvenate with yoga and meditation sessions led by experienced instructors.</p>
                    <a href="services.php?service=yoga-meditation" class="btn btn-outline-primary mt-3">Learn More</a>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <!-- Service 4 -->
            <div class="col-md-4">
                <div class="service-box text-center p-4">
                    <i class="bi bi-nutrition service-icon"></i>
                    <h4>Nutrition Consulting</h4>
                    <p>Receive professional nutrition advice to complement your fitness routine.</p>
                    <a href="services.php?service=nutrition" class="btn btn-outline-primary mt-3">Learn More</a>
                </div>
            </div>
            <!-- Service 5 -->
            <div class="col-md-4">
                <div class="service-box text-center p-4">
                    <i class="bi bi-activity service-icon"></i>
                    <h4>Strength Training</h4>
                    <p>Build strength and endurance with advanced gym equipment and expert guidance.</p>
                    <a href="services.php?service=strength-training" class="btn btn-outline-primary mt-3">Learn More</a>
                </div>
            </div>
            <!-- Service 6 -->
            <div class="col-md-4">
                <div class="service-box text-center p-4">
                    <i class="bi bi-hot service-icon"></i>
                    <h4>Sauna & Relaxation</h4>
                    <p>Unwind after workouts in our state-of-the-art sauna and relaxation areas.</p>
                    <a href="services.php?service=sauna" class="btn btn-outline-primary mt-3">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Gallery Section -->
<section class="gallery" id="gallery">
    <div class="container py-5">
        <h2 class="text-center text-dark mb-4">Our Gallery</h2>
        <p class="text-center text-muted mb-5">
            Take a glimpse into our state-of-the-art facilities and vibrant gym atmosphere.
        </p>
        <div class="row g-4">
            <!-- Loop through 16 images -->
            <!-- Image 1 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 1">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 2">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 3">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 4">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 5">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 6">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 7">
                </div>
            </div>
            <!-- Image 8 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 8">
                </div>
            </div>
            <!-- Image 9 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 9">
                </div>
            </div>
            <!-- Image 10 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 10">
                </div>
            </div>
            <!-- Image 11 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 11">
                </div>
            </div>
            <!-- Image 12 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 12">
                </div>
            </div>
            <!-- Image 13 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 13">
                </div>
            </div>
            <!-- Image 14 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 14">
                </div>
            </div>
            <!-- Image 15 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 15">
                </div>
            </div>
            <!-- Image 16 -->
            <div class="col-md-3 col-sm-6">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Gym Image 16">
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="gallery.php" class="btn btn-primary">View More</a>
        </div>
    </div>
</section>



<!-- Contact Section -->
<h2 class="text-center text-dark mb-4">Contact us</h2>
<section class="contact" id="contact">
    <div class="container py-5">
        <div class="row">
            <!-- Contact Details -->
            <div class="col-md-6 contact-col">
                <h3>Send us a message<img src="images/msg-icon.png" alt="Message Icon" /></h3>
                <p>
                    Writing experts recommend paragraphs of no more than 150 words in three to eight sentences. 
                    Vary the lengths of your paragraphs to make them more interesting. 
                </p>
                <ul>
                    <li><img src="images/mail-icon.png" alt="Mail Icon" />kavindurashan2@gmail.com</li>
                    <li><img src="images/phone-icon.png" alt="Phone Icon" />+94 71 0 762 852</li>
                    <li><img src="images/location-icon.png" alt="Location Icon" />Colombo, Sri Lanka</li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6 contact-col">
                <form id="contact-form">
                    <label for="name">Your name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required />

                    <label for="phone">Phone number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your mobile number" required />

                    <label for="message">Write your message here</label>
                    <textarea id="message" name="message" rows="6" placeholder="Enter your message"></textarea>

                    <button type="submit" class="btn dark-btn">
                        Submit now<img src="images/white-arrow.png" alt="Arrow Icon" />
                    </button>
                </form>
                <span id="result"></span>
            </div>
        </div>
    </div>
</section>











    <!-- Footer -->
    <footer class="footer">
        <p class="mb-0">&copy; 2025 Gym Brand. All Rights Reserved.</p>
    </footer>

    <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Xu3HIJBnB8/l6SEldBphH/h5YHLfu6VsInVZpPZwlzzTtmI1BxvjrLgg93jbxRkN" crossorigin="anonymous"></script>
    <script src="js/animations.js"></script>

    <script>
    document.getElementById("contact-form").addEventListener("submit", async function (event) {
        event.preventDefault();

        const resultSpan = document.getElementById("result");
        resultSpan.textContent = "Sending...";

        const formData = new FormData(event.target);
        formData.append("access_key", "1b6481f3-ddf7-42f0-b730-ffa4e53ba6ab");

        try {
            const response = await fetch("https://api.web3forms.com/submit", {
                method: "POST",
                body: formData,
            });

            const data = await response.json();

            if (data.success) {
                resultSpan.textContent = "Form Submitted Successfully";
                event.target.reset();
            } else {
                resultSpan.textContent = data.message || "Something went wrong!";
            }
        } catch (error) {
            resultSpan.textContent = "Error: Unable to submit the form.";
        }
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navbar = document.getElementById('main-navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) { // Adjust scroll threshold as needed
                navbar.classList.add('dark-nav');
            } else {
                navbar.classList.remove('dark-nav');
            }
        });
    });
</script>


</body>
</html>
