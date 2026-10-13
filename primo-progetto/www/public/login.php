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
<main>
    <h1>ACCESSO A AREA RISERVATA</h1>

    <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for = "username"> Username: </label>
        <input type = "text" id = "username" name = "username"> <br>

        <label for = "password"> Password: </label>
        <input type = "password" id = "password" name = "password"> <br>

        <button type="button">Invia Iscrizione</button>

</main>

</body>
</html>