<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label for="numero">Introduce un numero</label><br>
    <input type="number" name="numero"> <br>
    <input type="submit" name="Enviar">
    </form>

    <?php
        $numero = $_REQUEST['numero'];
        echo "<table border = 1>";
        echo "<tr><th>Potencia 2</th>";
        echo "<th>Potencia 3</th></tr>";
        
        
        for ($i=$numero; $i < $numero+5; $i++) { 
            $numero_cuadrado = pow($i, 2);
            $numero_cubo = pow($i, 3);
                echo "<tr>";
                echo "<td>$numero_cuadrado</td>";
                echo "<td>$numero_cubo</td>";
                echo "</tr>";
            }
            echo "</table>";
    ?>
</body>
</html>