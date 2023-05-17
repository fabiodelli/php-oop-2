<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex flex-wrap gap-3 justify-content-center">
        <?php
        require __DIR__ . '/models/computer.php';
        require __DIR__ . '/models/desktop.php';
        require __DIR__ . '/models/laptop.php';
        require __DIR__ . '/computer-db.php';

        foreach ($computers as $computer) {
            include __DIR__ .  '/card_template.php';
        }
        ?>
    </div>
</body>

</html>