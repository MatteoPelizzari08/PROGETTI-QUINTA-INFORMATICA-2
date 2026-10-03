<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>TAVOLA PITAGORICA</title>

</head>
<body>
<main>
<h1>TAVOLA PITAGORICA</h1>
<table>
    <thead>
    <th>X</th>
        <?php
            for($i = 1; $i <= 10; $i++){
                echo '<th>' . $i . '</th>';
            }
        ?>
    </thead>
    <tbody>
    <?php
        for ($i = 1; $i <= 15; $i++){
            echo '<tr>';
            echo '<td> <strong>' . $i . '</strong></td>';
            for($j=1; $j<=10; $j++){
                echo '<td>' . ($i*$j) . '</td>';
            }
            echo '</tr>';
        }
    ?>

    </tbody>
</table>
</main>

</body>
</html>