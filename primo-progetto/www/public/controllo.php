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
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $password = htmlspecialchars($_POST['password']);
                if(strlen($password) <'8' || !preg_match("/^[a-zA-Z0-9-']*$/", $password)){
                    echo '<form action = "login.php">';
                    echo '<h1>PASSWORD NON VALIDA</h1>';
                    echo '<p>La password deve essere considerata VALIDA soltanto se rispetta tutti i seguenti requisiti:  
                            - deve contenere almeno 8 caratteri; 
                            - deve contenere almeno una lettera maiuscola;  
                            - deve contenere almeno una cifra numerica.  </p>';
                }
        }
    ?>
</main>

</body>
</html>