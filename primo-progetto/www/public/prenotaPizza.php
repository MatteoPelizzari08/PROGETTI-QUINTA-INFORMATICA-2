<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>PRENOTAZIONE PIZZA</title>
</head>
<body>
<h1>PRENOTAZIONE SU MYPIZZA</h1>
<main>

    <form action="prenotaPizza.php" method="post">

        <label for="sistemazione">Tipo di sistemazione</label>
        <select id="sistemazione" name="sistemazione">
            <option value="coperto">Al coperto</option>
            <option value="aperto">All'aperto</option>
        </select>

        <label for="scegliPizza">Tipi di pizza:</label>
        <select id="scegliPizza" na0me="scegliPizza">
            <option value="capricciosa">Capricciosa</option>
            <option value="margherita">Margherita</option>
            <option value="marinara">Marinara</option>
            <option value="4stagioni">4 stagioni</option>
            <option value="boscaiola">Boscaiola</option>
            <option value="valsabbina">Valsabbina</option>
        </select>

        <label>Seleziona le eventuali aggiunte:</label>
        <input type="checkbox" id="prosciutto" name="aggiunte[]" value="prosciutto">
        <label for="prosciutto">prosciutto</label><br>
        <input type="checkbox" id="ricotta" name="aggiunte[]" value="ricotta">
        <label for="ricotta">ricotta</label><br>
        <input type="checkbox" id="salsiccia" name="aggiunte[]" value="salsiccia">
        <label for="salsiccia">salsiccia</label><br>

        <label>Seleziona tipo di impasto:</label><br>
        <input type="radio" id="normale" name="impasto" value="normale" checked>
        <label for="normale">normale</label><br>
        <input type="radio" id="glutine" name="impasto" value="senza glutine">
        <label for="glutine">senza glutine</label><br>

        <button type="submit" name="ordina" value="1">Ordina</button>
    </form>

    <?php
    if (isset($_POST['ordina'])) {
        $sistemazione = $_POST['sistemazione'] ?? '';
        $pizza = $_POST['scegliPizza'] ?? '';
        $impasto = $_POST['impasto'] ?? '';

        $aggiunteArray = $_POST['aggiunte'] ?? [];
        $aggiunte = count($aggiunteArray) > 0 ? implode(', ', $aggiunteArray) : 'nessuna';

        echo '<p>La pizza ' . $pizza . ' con impasto ' . $impasto . ' e aggiunte di: ' . $aggiunte . ' è stata correttamente prenotata con sistemazione ' .$sistemazione . '.</p>';
    }
    ?>

</main>
</body>
</html>