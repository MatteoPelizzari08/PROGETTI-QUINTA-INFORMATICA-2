<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>ACCESSO AREA RISERVATA</title>

</head>
<body>
    <h1>ACCESSO A AREA RISERVATA</h1>
<main>


<?php
    echo '<form action= "controllo.php" method="post">';
        echo '<label for = "username"> Username: </label> 
        <input type = "text" id = "username" name = "username"> <br>

        <label for = "password"> Password: </label>
        <input type = "password" id = "password" name = "password"> <br>

        <button type="submit">Invia Iscrizione</button> ';
        echo '</form>'
?>
    </main>
</body>
</html>