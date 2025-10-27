<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
        <img src="<?php echo htmlspecialchars($single['single_afbeelding']); ?>" 
             class="card-img-top" 
             alt="<?php echo htmlspecialchars($single['titel']); ?>">

        <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($single['titel']); ?></h5>
            <p class="card-text mb-2">
                <strong>Artiest:</strong> <?php echo htmlspecialchars($single['artiest_naam']); ?><br>
                <strong>Genre:</strong> <?php echo htmlspecialchars($single['artiest_genre']); ?><br>
                <strong>Jaar:</strong> <?php echo htmlspecialchars($single['release_jaar']); ?><br>
                <strong>Duur:</strong> <?php echo htmlspecialchars($single['duur']); ?> min
            </p>
            <a href="/single.php?singleid=<?php echo $single['id']; ?>" 
               class="btn btn-primary btn-sm">Bekijk</a>
        </div>
    </div>
</div>
