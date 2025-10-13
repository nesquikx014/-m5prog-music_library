


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
<link href="/dist/css/main.min.css" rel="stylesheet">


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<?php
// voorbeeldlijst van singles
$singles = [
    [
        "titel" => "Summer Drift",
        "artiest" => "The Wave",
        "genre" => "Indie",
        "afbeelding" => "images/summerdrift.jpg"
    ],
    [
        "titel" => "Blue Horizon",
        "artiest" => "Luna Sky",
        "genre" => "Pop",
        "afbeelding" => "images/bluehorizon.jpg"
    ],
    [
        "titel" => "Bounce Back",
        "artiest" => "Echo Beats",
        "genre" => "Dance",
        "afbeelding" => "images/bounceback.jpg"
    ],
    [
        "titel" => "Nightfall",
        "artiest" => "The Wave",
        "genre" => "Indie",
        "afbeelding" => "images/nightfall.jpg"
    ],
    [
        "titel" => "Starlit",
        "artiest" => "Luna Sky",
        "genre" => "Electro Pop",
        "afbeelding" => "images/starlit.jpg"
    ]
];
?>


<main class="container my-5">
    <h1 class="mt-5">Muziek Singles</h1>
    <div class="row">
        <?php foreach ($singles as $single): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= htmlspecialchars($single['afbeelding']) ?>" class="card-img-top" alt="<?= htmlspecialchars($single['titel']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($single['titel']) ?></h5>
                        <p class="card-text">
                            <?= htmlspecialchars($single['artiest']) ?><br>
                            <small class="text-muted"><?= htmlspecialchars($single['genre']) ?></small>
                        </p>
                        <a href="single.php" class="btn btn-primary btn-sm">Bekijk details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>


<footer class="footer mt-auto py-3 bg-body-tertiary">
    <script src="dist/js/main.js"></script>
    <div class="container">
        <span class="text-body-secondary">Place footer content here.</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>