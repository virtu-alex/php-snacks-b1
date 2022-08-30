SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60


<?php
$teams = [
    $team_home = [" Armani Comio", " Atlanta Robba", " Bene ma non Ben Simmons"],
    $score_home = ["55", "35", "60"],
];

$team_guest = [
    $guest_name = [" Chicago Inside", " Cleveland Cadavers", " NBArazzanti"],
    $score_guest = ["70", "68", "61"]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <div>
        <h3><a href="snack2.php">NEXT SNACK</a></h3>
        <h3><a href="index.php">GO BACK TO INDEX OF</a></h3>
        <ul>
            <?php for ($i = 0; $i <= count($teams); $i++) : ?>
                <li>
                    <span><?= $team_home[$i] ?> - </span>
                    <span><?= $guest_name[$i] ?></span>
                    | <span> <?= $score_home[$i] ?></span>
                    - <span> <?= $score_guest[$i] ?></span>
                </li>
            <?php endfor; ?>

        </ul>
    </div>
</body>

</html>