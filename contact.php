<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-light">
    <?php include 'navbar.php'; ?>

    <div class="container py-5">
        <h2 class="mb-4">Contact Us</h2>

        <div class="row mb-4">
            <div class="col-md-6">
                <h5>Email:</h5>
                <p>support@travelexplorer.com</p>

                <h5>Phone:</h5>
                <p>+123 456 7890</p>

                <h5>Address:</h5>
                <p>123 Explorer Avenue, Wanderlust City, TravelState, 456789</p>
            </div>
            <div class="col-md-6">
                <h5>Find us on Google Maps:</h5>
                <div class="ratio ratio-4x3">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.9425141274936!2d-122.08424968468999!3d37.42199997982573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb0b1ef443db7%3A0xe1b2d0f0c5a9dc47!2sGoogleplex!5e0!3m2!1sen!2sus!4v1677335106033!5m2!1sen!2sus" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <h4 class="mb-4">Our Office</h4>
            <div class="col-md-4">
                <img src="images\firm1.jpg" class="img-fluid rounded mb-3" alt="Office 1">
            </div>
            <div class="col-md-4">
                <img src="images\firm2.jpg" class="img-fluid rounded mb-3" alt="Office 2">
            </div>
            <div class="col-md-4">
                <img src="images\firm2.jpg" class="img-fluid rounded mb-3" alt="Office 3">
            </div>
        </div>
    </div>
</body>
</html>
