<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>Form Richesta Corsi Di Lingua</title>

</head>
<body>
<main>
    <?php
    echo '<h1>RICHIESTA CORSI DI LINGUA</h1>';

    echo '<form>
        <label for = "nome"> Nome: </label>
        <input type = "text" id = "nome" name = "nome"> <br>

        <label for = "cognome"> Cognome: </label>
        <input type = "text" id = "cognome" name = "cognome"> <br>

        <label for = "email"> Email: </label>
        <input type = "email" id = "email" name = "email"> <br>

        <label for = "corsoLingua">Corso di lingua:</label>
        <select id = "corsoLingua">Corso di lingua:
        <option value = "inglese">Inglese</option>
        <option value = "italiano">Italiano</option>
        <option value = "spagnolo">Spagnolo</option>
        <option value = "francese">Francese</option>
        <option value = "tedesco">Tedesco</option>
        <option value = "altra lingua"> Altra Lingua</option>
        </select>
        

    </form>';

?>
</main>

</body>
</html>