<?php include __DIR__ . "/../../src/config/variables.php" ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kandidat*innen | planlos-wahl</title>

    <?php include TEMPLATE_DIR . "/base/styles.html.php" ?>

</head>
<body>

<?php include TEMPLATE_DIR . "/base/navigation.html.php" ?>

<div class="header">
    <div class="inner-header flex">
        <h1>Kandidat*innen</h1>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-6">
            <div class="card">
                <a href="maxmustermann">
                    <img src="https://via.placeholder.com/300" alt="Max Mustermann">
                    <div class="card-headline card-center">Max Mustermann</div>
                    <div class="card-text card-center">Kandidatin Muster Partei</div>
                </a>
            </div>
        </div>

    </div>
</div>

<?php include TEMPLATE_DIR . "/base/footer.html.php" ?>

</body>
</html>