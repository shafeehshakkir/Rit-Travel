<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Destinations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-light">

    <?php include 'navbar.php'; ?>

    <div class="container py-5">
        <h2 class="text-center mb-4">Explore Destinations</h2>
        <div class="row">
            <?php
            $destinations = [
                ['Japan', 'japan_thumb.jpg', 'Experience the harmony of tradition and tech.'],
                ['France', 'france_thumb.jpg', 'Fall in love with timeless elegance.'],
                ['Egypt', 'egypt_thumb.jpg', 'Walk through ancient wonders.'],
                ['Italy', 'italy_thumb.jpg', 'Dive into art, architecture, and pasta.'],
                ['Thailand', 'thailand_thumb.jpg', 'A paradise of temples and beaches.'],
                ['Greece', 'greece_thumb.jpg', 'Cradle of Western civilization.'],
                ['Australia', 'australia_thumb.jpg', 'Wildlife and wonders down under.'],
                ['Brazil', 'brazil_thumb.jpg', 'Carnival, culture, and Amazon rainforests.']
            ];
            foreach ($destinations as $dest) {
                echo "<div class='col-md-3 mb-4'>
                    <div class='card'>
                        <img src='images/{$dest[1]}' class='card-img-top' style='height: 200px; object-fit: cover;' alt='{$dest[0]}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$dest[0]}</h5>
                            <p class='card-text'>{$dest[2]}</p>
                            <a href='destination-detail.php?place={$dest[0]}' class='btn btn-primary'>View Details</a>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>