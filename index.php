<?php // index.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Explorer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-dark text-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black px-4">
        <a class="navbar-brand" href="#">TravelExplorer</a>
        <div class="ms-auto d-flex gap-3">
            <a href="#"><img src="icons/instagram.svg" width="24" alt="Instagram"></a>
            <a href="#"><img src="icons/facebook.svg" width="24" alt="Facebook"></a>
            <a href="#"><img src="icons/twitter.svg" width="24" alt="Twitter"></a>
        </div>
    </nav>

    <!-- Navigation Links -->
    <ul class="nav nav-pills justify-content-center py-3">
        <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item"><a href="destinations.php" class="nav-link">Destinations</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
    </ul>

    <!-- Hero Section -->
    <div class="hero-image text-center text-light d-flex align-items-center justify-content-center"
         style="height: 80vh; background-image: url('images/hero_image.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="bg-black bg-opacity-50 p-4 rounded">
            <h1 class="display-4">Welcome to TravelExplorer</h1>
            <p class="lead">Discover stunning destinations around the world</p>
            <a href="destinations.php" class="btn btn-outline-light mt-3">Explore Destinations</a>
        </div>
    </div>

    <!-- Featured Destinations -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Featured Destinations</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card bg-secondary text-light border-0">
                    <div class="card-body">
                        <h5 class="card-title">Paris, France</h5>
                        <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Tokyo">
                        <p class="card-text">The city of love, lights, and breathtaking architecture.</p>
                        <a href="#" class="btn btn-outline-light btn-sm">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-secondary text-light border-0">
                    <div class="card-body">
                        <h5 class="card-title">Bali, Indonesia</h5>
                        <img src="https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Tokyo">
                        <p class="card-text">Tropical paradise with pristine beaches and rich culture.</p>
                        <a href="#" class="btn btn-outline-light btn-sm">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-secondary text-light border-0">
                    <div class="card-body">
                        <h5 class="card-title">New York, USA</h5>
                        <img src="https://plus.unsplash.com/premium_photo-1714051660720-888e8454a021?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Tokyo">
                        <p class="card-text">The city that never sleeps, full of life and adventure.</p>
                        <a href="#" class="btn btn-outline-light btn-sm">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scrollable All Destinations -->
    <div class="container-fluid px-5 pb-5">
        <h2 class="text-center mb-4">View All Destinations</h2>
        <div class="d-flex overflow-auto gap-4 pb-3">
            <div class="card bg-secondary text-light border-0" style="min-width: 250px;">
                <img src="https://plus.unsplash.com/premium_photo-1661914240950-b0124f20a5c1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Tokyo">
                <div class="card-body">
                    <h5 class="card-title">Tokyo, Japan</h5>
                    <a href="#" class="btn btn-outline-light btn-sm">View</a>
                </div>
            </div>
            <div class="card bg-secondary text-light border-0" style="min-width: 250px;">
                <img src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?q=80&w=1996&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Rome">
                <div class="card-body">
                    <h5 class="card-title">Rome, Italy</h5>
                    <a href="#" class="btn btn-outline-light btn-sm">View</a>
                </div>
            </div>
            <div class="card bg-secondary text-light border-0" style="min-width: 250px;">
                <img src="https://images.unsplash.com/photo-1518684079-3c830dcef090?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Dubai">
                <div class="card-body">
                    <h5 class="card-title">Dubai, UAE</h5>
                    <a href="#" class="btn btn-outline-light btn-sm">View</a>
                </div>
            </div>
            <div class="card bg-secondary text-light border-0" style="min-width: 250px;">
                <img src="https://plus.unsplash.com/premium_photo-1697730198238-48ee2f2fe1b7?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Sydney">
                <div class="card-body">
                    <h5 class="card-title">Sydney, Australia</h5>
                    <a href="#" class="btn btn-outline-light btn-sm">View</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 bg-black text-light">
        <small>&copy; 2025 TravelExplorer. All rights reserved.</small>
    </footer>
</body>
</html>
