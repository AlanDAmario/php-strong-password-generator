<?php
function generatePassword($password_lenght)
{
    //METODO PIù FUNZIONALE
    $rand_letters = range('A', 'Z');
    $rand_upper_letters = range('a', 'z');
    $rand_numbers = range(0, 9);
    $rand_special = str_split('/,(,!,),?');
    $password_chars = [...$rand_letters, ...$rand_upper_letters, ...$rand_numbers, ...$rand_special];

    //UTILIZZIAMO UN CICLO PER STAMPARE 
    $password = '';
    // $password_chars = 'a,b,c,d,z,1,2,3,4,5,/,(,!,),?';
    for ($i = 0; $i < $password_lenght; $i++) {
        $rand = rand(0, count($password_chars) - 1);
        $password .= $password_chars[$rand];
    }
    return $password;
}
$password = '';
if (!empty($_GET['generate-password'])) {
    //CONVADILAZIONE PASSWORD DEVE ESSERE UN NUMERO
    $validation_password = intval($_GET['generate-password']) ?  intval($_GET['generate-password']) : rand(1, 9);
    //GENERAZIONE PASSWORD 
    $password = generatePassword($_GET['generate-password']);
}


var_dump($_GET);
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

    <div class="container">
        <?php if (!strlen($password)) : ?>
            <h3>Passowrd non generata!!</h3>
        <?php else : ?>
            <h3>La tua password è <?php echo $password; ?></h3>
        <?php endif; ?>
    </div>
</body>

</html>