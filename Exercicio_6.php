<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <?php
        $i = 0;
            do{
                $multiplicacion= $i * 20;
                $muestra= 320 - $multiplicacion;
                echo "<p>Los numeros son: $muestra </p>";
                $i+=1;
            }
            while($i <= 8);
        
    ?>
</body>
</html>