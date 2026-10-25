<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>Prenotazione Pizza</title>
</head>
<body>
<main>
    <h1>Prenotazione MyPizza</h1>

    <form action="prenotaPizza.php" method="post">

        <label for="sistemazione">Tipo di sistemazione</label>
        <select id="sistemazione" name="sistemazione">
            <option value="al coperto">Al coperto</option>
            <option value="all'aperto">All'aperto</option>
        </select>

        <label for="scegliPizza">Tipo di pizza</label>
        <select id="scegliPizza" name="scegliPizza">
            <option value="Capricciosa">Capricciosa</option>
            <option value="Margherita">Margherita</option>
            <option value="Marinara">Marinara</option>
            <option value="4 Stagioni">4 stagioni</option>
            <option value="Boscaiola">Boscaiola</option>
            <option value="Valsabbina">Valsabbina</option>
        </select>

            <label for="aggiunte[]">Eventuali aggiunte:</label>
            <input type="checkbox" name="aggiunte[]" value="prosciutto"> Prosciutto<br>
            <input type="checkbox" name="aggiunte[]" value="ricotta"> Ricotta<br>
            <input type="checkbox" name="aggiunte[]" value="salsiccia"> Salsiccia<br>

            <label for="impasto">Impasto:</label><br>
            <label><input type="radio" name="impasto" value="normale" checked> Normale</label><br>
            <label><input type="radio" name="impasto" value="senza glutine"> Senza glutine</label><br>

        <button type="submit" name="ordina">Ordina</button>
    </form>

    <?php
    if (isset($_POST['ordina'])) {
        if (isset($_POST['sistemazione'])) {
            $sistemazione = $_POST['sistemazione'];
        } else {
            $sistemazione = '';
        }

        if (isset($_POST['scegliPizza'])) {
            $pizza = $_POST['scegliPizza'];
        } else {
            $pizza = '';
        }

        if (isset($_POST['impasto'])) {
            $impasto = $_POST['impasto'];
        } else {
            $impasto = '';
        }

        if (isset($_POST['aggiunte'])) {
            $aggiunte = "";
            foreach ($_POST['aggiunte'] as $item) {
                $aggiunte = $aggiunte . $item . ", ";
            }
        } else {
            $aggiunte = 'nessuna';
        }

        echo "<p>La pizza $pizza con impasto $impasto e aggiunte di: $aggiunte è stata correttamente prenotata con sistemazione $sistemazione.</p>";
    }
    ?>

</main>
</body>
</html>