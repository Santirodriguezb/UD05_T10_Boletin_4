<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 22</title>
</head>
<body>
<?php
    $final=100;
    $inicio=2;

    for ($i = $inicio; $i <= $num; $i++) {
        for ($j = $inicio; $j < $i; $j++) {
            if ($i % $j == 0) {
                break;
            }
        }
        if ($k == $j) {
            echo "Número primo : ", $j, "<br>"; 
        }
    }

?>
</body>
</html>