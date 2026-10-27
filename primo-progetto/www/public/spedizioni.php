<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>SPEDIZIONI</title>
</head>

<body>
<h1>RICHIESTA DI SPEDIZIONE</h1>
<p>Tipologia di spedizione selezionata: </p>
<?php
$tipo = '';
    if(isset($_GET['Standard'])){
        $tipo = 'Standard';
    }
    else if (isset($_GET['Espressa'])){
        $tipo = 'Espressa';
    }
    echo $tipo;
?>

<label for="nome">Nome del cliente: </label>
<input type = "text" id="nome" name="nome">

<label for = "pesoPacco[]">Peso del pacco (in kg):</label>
<select id = "pesoPacco[]">
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
    <option value = "6">6</option>
</select>

<label for ="aereo">Invio aereo:</label>
<input type="checkbox" name="aereo" value ="aereo"> Si (costo aggiuntivo) <br>

<button type="submit" name="calcolaPrezzo">Calcola Prezzo</button>

<p> <a href ="home.php">Torna alla home</a></p>

</body>

<main>
    <?php
    $costoTotale = 0;
    $costoStandard = 3;
    $costoEspressa = 5;
    $costoAereo = 10;
    if(isset($_POST['calcolaPrezzo']) && $_POST['nome']){
            $nome = $_POST['nome'];
            if(empty($nome)){
                echo 'Inserisci il nome del cliente';
            }
            $pesoPacco = $_POST['pesoPacco[]'];
            if($tipo === 'Standard')
                $costoTotale = $pesoPacco*$costoStandard;
            else if($tipo === 'Espressa')
                $costoTotale=$pesoPacco*$costoEspressa;
            if(isset($_POST['aereo'])) {
                $costoTotale+=10;
            }
    }
    ?>

    <h2>RIEPILOGO DELLA RICHIESTA DI SPEDIZIONE</h2>
<table>
    <thead>
    <th>Nome del cliente</th>
    <th>Tipologia di spedizione</th>
    <th>Peso del pacco</th>
    <th>Costo per chilogrammo</th>
    <th>Supplemento aereo</th>
    <th><strong>Costo totale</strong></th>
    </thead>
</table>


</main>