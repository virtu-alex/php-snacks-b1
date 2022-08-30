<?php

function getRandomNumbers($min, $max, $n_items)
{
    $numbers = [];
    while (count($numbers) < $n_items) {
        $random_numbers = rand($min, $max);
        if (!in_array($random_numbers, $numbers)) {
            $numbers[] = $random_numbers;
        }
    }
    return $numbers;
}

print_r(getRandomNumbers(1, 100, 15));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

<body>
    <div>
    </div>
</body>

</html>