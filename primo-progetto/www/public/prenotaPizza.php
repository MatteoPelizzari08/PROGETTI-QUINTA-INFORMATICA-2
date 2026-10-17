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
<?php
    echo '<form action= "prenotaPizza.php" method="post">
        
        <label for = "sistemazione"> Tipo di sistemazione</label>
        <select id = "sistemazione">Scegli la tua sistemazione:
                <option value = "coperto">Al coperto</option>
                <option value = "aperto">All aperto</option>
                </select>

        <label for = "scegliPizza"> Tipi di pizza:</label>
                    <select id = "scegliPizza">Scegli la tua pizza preferita:
                            <option value = "capricciosa">Capricciosa</option>
                            <option value = "margherita">Margherita</option>
                            <option value = "marinara">Marinara</option>
                            <option value = "4stagioni">4 stagioni</option>
                            <option value = "boscaiola">Boscaiola</option>
                            <option value = "valsabbina"> Valsabbina</option>
                            </select>


<label for="aggiunte"> seleziona le eventuali aggiunte:</label>
       <input type="checkbox" id="prosciutto" name="prosciutto" value="prosciutto">
       <label for="prosciutto">prosciutto</label><br>
       <input type="checkbox" id="ricotta" name="ricotta" value="ricotta">
       <label for="ricotta">ricotta</label><br>
       <input type="checkbox" id="salsiccia" name="salsiccia" value="salsiccia">
       <label for="salsiccia">salsiccia</label><br>
 
</form>';


?>
</main>
</body>
</html>