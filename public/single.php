<?php
require_once('../source/database.php');

$single_id = isset($_GET['singleid']) ? (int) $_GET['singleid'] : 1;

$query = "
SELECT s.id, s.titel, s.duur, s.release_jaar, s.afbeelding AS single_afbeelding,
       a.naam AS artiest_naam, a.genre AS artiest_genre
FROM singles s
LEFT JOIN artiesten a ON s.artiest_id = a.id
WHERE s.id = ?
";

$stmt = $connection->prepare($query);
$stmt->bind_param('i', $single_id);
$stmt->execute();
$result = $stmt->get_result();

$single = $result->fetch_assoc();

if (!$single) {
    die("❌ Geen single gevonden met ID: " . htmlspecialchars($single_id));
}
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($single['titel']) ?> - Muziek Bibliotheek</title>
    <link href="/dist/css/main.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/index.php">Muziek Bibliotheek</a>
    </div>
</nav>

<main class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-5">
            <img src="<?= htmlspecialchars($single['single_afbeelding']) ?>"
                 class="img-fluid rounded shadow-sm"
                 alt="<?= htmlspecialchars($single['titel']) ?>">
        </div>
        <div class="col-md-7">
            <h1 class="mt-3"><?= htmlspecialchars($single['titel']) ?></h1>
            <p class="fs-5 mb-1"><strong>Artiest:</strong> <?= htmlspecialchars($single['artiest_naam']) ?></p>
            <p class="fs-5 mb-1"><strong>Genre:</strong> <?= htmlspecialchars($single['artiest_genre']) ?></p>
            <p class="fs-5 mb-1"><strong>Jaar:</strong> <?= htmlspecialchars($single['release_jaar']) ?></p>
            <p class="fs-5 mb-1"><strong>Duur:</strong> <?= htmlspecialchars($single['duur']) ?> min</p>
            
            <a href="/index.php" class="btn btn-secondary mt-3">← Terug naar overzicht</a>
        </div>
    </div>
</main>

<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
        <span class="text-body-secondary">© 2025 Muziek Bibliotheek</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
