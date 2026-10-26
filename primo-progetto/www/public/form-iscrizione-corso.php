<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>Form Richiesta Corsi Di Lingua</title>
</head>
<body>
<main>
    <h1>RICHIESTA CORSI DI LINGUA</h1>

    <form action="form-iscrizione-corso.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="corsoLingua">Corso di lingua:</label>
        <select id="corsoLingua" name="corsoLingua">
            <option value="inglese">Inglese</option>
            <option value="italiano">Italiano</option>
            <option value="spagnolo">Spagnolo</option>
            <option value="francese">Francese</option>
            <option value="tedesco">Tedesco</option>
        </select>


            <label>Livello: </label>
            <input type="radio" id="base" name="livello" value="base">
        <label for="base">Base</label>

            <input type="radio" id="intermedio" name="livello" value="intermedio">
            <label for="intermedio">Intermedio</label>

            <input type="radio" id="avanzato" name="livello" value="avanzato">
            <label for="avanzato">Avanzato</label>

        <br>


            <label>Preferenze orario:</label> <br>
            <input type="checkbox" id="mattina" name="orario[]" value="mattina">
            <label for="mattina">Mattina</label>

            <input type="checkbox" id="pomeriggio" name="orario[]" value="pomeriggio">
            <label for="pomeriggio">Pomeriggio</label>

            <input type="checkbox" id="sera" name="orario[]" value="sera">
            <label for="sera">Sera</label>


        <label for="altreRichieste">Altre richieste:</label>
        <input type="text" id="altreRichieste" name="altreRichieste">

        <button type="reset" class="secondary">Reset</button>
        <button type="submit" name ="invia">Invia Iscrizione</button>
    </form>

    <?php
    if(isset($_POST['invia'])) {
        if(isset($_POST['nome'])){
        $nome = $_POST['nome'];}
        else {
            $nome = "";
        }
        if(isset($_POST['cognome'])){
            $cognome = $_POST['cognome'];
        }
        else {
            $cognome = "";
        }
        if(isset($_POST['corsoLingua'])){
            $corsoLingua = $_POST['corsoLingua'];
        }
        else {
            $corsoLingua = "";
        }
        if(isset($_POST['livello'])){
            $livello = $_POST['livello'];
        }
        else {
            $livello = "";
        }
        if(isset($_POST['mattina'])){
            $orario = $_POST['mattina'];
        }
        else if(isset($_POST['pomeriggio'])){
            $orario = $_POST['pomeriggio'];
        }
        else if(isset($_POST['sera'])){
            $orario = $_POST['sera'];

        }
        if(isset($_POST['altreRichieste'])){
            $altreRichieste = $_POST['altreRichieste'];
        }
        else {
            $altreRichieste = "nessuna";

        }
        echo "<p> Io sottoscritto $nome $cognome, dichiaro di voler partecipare al corso di lingua $corsoLingua con livello $livello durante l'orario $orario, con richieste $altreRichieste </p>";
    }
    ?>
</main>
</body>
</html>