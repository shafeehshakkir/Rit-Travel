<?php 
$place = $_GET['place'] ?? 'Unknown'; 
include 'db.php';

$key = strtolower($place);
$content_sql = "SELECT intro, highlights FROM destination_content WHERE destination = ?";
$stmt = $conn->prepare($content_sql);
$stmt->bind_param("s", $key);
$stmt->execute();
$result = $stmt->get_result();
$content = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= htmlspecialchars($place) ?> Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-light">

    <?php include 'navbar.php'; ?>

    <div class="container py-5">
        <h2><?= htmlspecialchars($place) ?></h2>

        <!-- Image Carousel -->
        <div class="mx-auto mb-4" style="max-width: 900px;">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $folder = 'images/';
                    $index = 0;

                    while (file_exists($folder . $key . ($index + 1) . '.jpg')) {
                        $image = $key . ($index + 1) . '.jpg';
                        echo '<div class="carousel-item ' . ($index === 0 ? 'active' : '') . '">
                                <img src="' . $folder . $image . '" class="d-block w-100" style="max-height: 400px; object-fit: cover; border-radius: 10px;" alt="' . $place . '">
                              </div>';
                        $index++;
                    }

                    if ($index === 0) {
                        echo '<div class="carousel-item active">
                                <img src="images/default.jpg" class="d-block w-100" style="max-height: 400px; object-fit: cover; border-radius: 10px;" alt="No image available">
                              </div>';
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <!-- Destination Content -->
        <?php if ($content): ?>
            <div class="my-4">
                <h4>About <?= htmlspecialchars($place) ?></h4>
                <p><?= $content['intro'] ?></p>
                
                <h5 class="mt-3">Top Places to Visit:</h5>
                <ul>
                    <?php
                    $highlights = explode(',', $content['highlights']);
                    foreach ($highlights as $spot) {
                        echo "<li>" . trim($spot) . "</li>";
                    }
                    ?>
                </ul>
            </div>
        <?php else: ?>
            <p class="text-muted">Detailed travel content will be available soon.</p>
        <?php endif; ?>

        <!-- Enquiry Form -->
        <form action="submit_enquiry.php" method="post" class="bg-black p-4 rounded">
            <input type="hidden" name="place" value="<?= htmlspecialchars($place) ?>">
            <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Your Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Your Message</label>
                <textarea class="form-control" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Enquiry</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>