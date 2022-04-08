<?php include __DIR__ . "/../../src/config/variables.php" ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Videos | planlos-wahl</title>

    <?php include TEMPLATE_DIR . "/base/styles.html.php" ?>

</head>
<body>

<?php include TEMPLATE_DIR . "/base/navigation.html.php" ?>

<div class="header">
    <div class="inner-header flex">
        <h1>Videos</h1>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-6">
            <video width="320" height="240" class="center-video" controls>
                <source src="files/mov_bbb.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="col-6">
            <video width="320" height="240" class="center-video" controls>
                <source src="files/mov_bbb.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="col-6">
            <video width="320" height="240" class="center-video" controls>
                <source src="files/mov_bbb.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="col-6">
            <video width="320" height="240" class="center-video" controls>
                <source src="files/mov_bbb.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>

<?php include TEMPLATE_DIR . "/base/footer.html.php" ?>

</body>
</html>