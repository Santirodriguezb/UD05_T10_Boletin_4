<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Numero: <input type="text" name="entero" autofocus/><br/>
    <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
    <input type="submit" name="Enviar">
    </form>


    <?php
        $numero=$_REQUEST['entero'];
        $principio=$numero + 1;
        $final= $numero + 100;

        if ($numero < 0) {
            echo "El dato que introduces no es un numero entero";
        } else {
            for ($i=$principio; $i < $final ; $i++) { 
                $calculo=$calculo + $i;
            }
            echo "La suma es: $calculo";
        }
    ?>
</body>
</html>