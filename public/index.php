<?php
require_once('../source/database.php');

$query = "
SELECT s.id, s.titel, s.duur, s.release_jaar, s.afbeelding AS single_afbeelding,
       a.naam AS artiest_naam, a.genre AS artiest_genre
FROM singles s
LEFT JOIN artiesten a ON s.artiest_id = a.id
ORDER BY s.titel
";

$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muziek Singles</title>
    <link href="/dist/css/main.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Muziek Bibliotheek</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<main class="container my-5">
    <h1 class="mb-4">Muziek Singles</h1>
    <div class="row">
        <?php
        while ($single = $result->fetch_assoc()) {
            include('../source/card.php'); // laad het kaartcomponent
        }
        ?>
    </div>
</main>

<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container text-center">
        <span class="text-body-secondary">© 2025 Muziek Bibliotheek</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
