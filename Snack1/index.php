<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Partite di Basket</title>
</head>

<body>
    <?php
    // Array contenente le partite di basket
    $partite = [
        'partita' => [
            'team' => "Olimpia Milano",
            'points' => rand(50, 130)
        ],
        [
            'team' => "Cantù",
            'points' => rand(50, 130)
        ],
        [
            'team' => "Dinamo Sassari",
            'points' => rand(50, 130)
        ],
        [
            'team' => "Pall. Varese",
            'points' => rand(50, 130)
        ],
        [
            'team' => "Dinamo Sassari",
            'points' => rand(50, 130)
        ],
        [
            'team' => "Mens Sana Siena",
            'points' => rand(50, 130)
        ],
        [
            'team' => "Reyer Venezia",
            'points' => rand(50, 130)
        ],
        [
            'team' => "Virtus Bologna",
            'points' => rand(50, 130)
        ],
    ];

    shuffle($partite);
    ?>
    <div class="container d-flex justify-content-center flex-column text-center my-5" id="risultati">
        <div class="d-flex flex-column justify-content-center py-3">
            <span>
                <img src="https://www.legabasket.it/packs/media/images/loghi/lba_logo-41f5b4340309beec47d7bd2c6fccba56.png"
                    alt="img" class="mb-3">
            </span>
            <span>
                <?php echo "<h1><strong>LBA matches:</strong> Play-off - Gara 1</h1>"; ?>
            </span>

        </div>
        <?php
        for ($i = 0; $i < count($partite); $i += 2) {
            $squadraCasa = $partite[$i]['team'];
            $squadraOspite = $partite[$i + 1]['team'];
            $puntiCasa = $partite[$i]['points'];
            $puntiOspite = $partite[$i + 1]['points'];

            echo "<p>$squadraCasa - $squadraOspite | $puntiCasa-$puntiOspite</p>";
        }
        ?>
    </div>


</body>

</html>