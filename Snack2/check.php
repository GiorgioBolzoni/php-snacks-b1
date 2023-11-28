<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Accesso</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];
        if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
            echo "<h2>Accesso riuscito</h2>";
        } else {
            echo "<h2>Accesso negato</h2>";
        }
    } else {
        header("Location: index.php");
        exit();
    }

    ?>
</body>

</html>