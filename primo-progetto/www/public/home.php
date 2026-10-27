<!DOCTYPE html>
<head>
<html lang="it">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>HOME</title>
<h1>BENVENUTO NEL SERVIZIO DI SPEDIZIONI</h1>
<form action ="home.php" method ="post"
<p>Seleziona la tipologia di spedizione:</p>
<ul>
    <li><a href="spedizioni.php"> Standard</a></li>
    <li><a href="spedizioni.php"> Espressa</a></li>
</ul>
</html>
</form>
</body>
<main>
    <?php

    if(isset($_GET['Standard'])){
        $tipo = $_GET['Standard'];
        }
        else if(isset($_GET['Espressa'])){
            $tipo = $_GET['Espressa'];
        }


    ?>
</main>



</head>
