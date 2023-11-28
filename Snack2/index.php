<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div
        class="container text-center d-flex flex-column justify-content-center align-content-center align-items-center">
        <h1>Login</h1>
        <div>
            <form action="check.php" method="get">
                <div class="d-flex justify-content-between">
                    <label for="name" class="me-3">Nome:</label>
                    <input type="text" id="name" name="name" class="mb-3" required><br>
                </div>

                <div class="d-flex justify-content-between">
                    <label for="mail" class="me-3">Email:</label>
                    <input type="text" id="mail" name="mail" class="mb-3" required><br>
                </div>

                <div class="d-flex justify-content-between">
                    <label for="age" class="me-3">Età:</label>
                    <input type="number" id="age" name="age" class="mb-5" required><br>
                </div>

                <input type="submit" value="Accedi">
            </form>
        </div>
    </div>
</body>

</html>