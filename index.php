<?php
echo 'ciao';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container text-center">
        <h1 class="py-5">Password generator</h1>
    </div>
    <div class="container py-5 text-center">
        <form action="index.php" method="GET">
            <label for="generate-password">Lunghezza password</label>
            <input type="number" id="generate-password" name="generate-password">
            <button type="submit">Crea</button>
        </form>
    </div>

    </form>
</body>

</html>