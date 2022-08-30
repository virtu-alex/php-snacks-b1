SNACK 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”;


<!-- controlla se name e' piu di 3 caratteri strlen ......... -->
<!-- controlla se mail include un '.' e una '@' strpos ........ -->
<!-- controlla se age sia un numero is_numeric ........ -->

<?php

$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

if ((strlen($name) > 3) && (strpos($mail, '@') && strpos($mail, '.')) && (is_numeric($age))) {
    echo '<h1>Accesso riuscito</h1>';
} else {
    echo '<h1>Accesso negato</h1>';
}



?>


<!-- saved query for fast check -->
<!-- ?name=alessio&mail=alessio.cordari@gmail.com&age=28 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>