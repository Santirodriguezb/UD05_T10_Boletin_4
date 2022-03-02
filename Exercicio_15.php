<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Base: <input type="text" name="base" autofocus/><br/>
    Potencia: <input type="text" name="potencia" autofocus/><br/>
    <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
    <input type="submit" name="Enviar">
    </form>

    <?php
        $base1 = $_REQUEST['base'];
        $potencia1 = $_REQUEST['potencia'];

        for ($i=0; $i <= $potencia1 ; $i++) { 
            $calculo = pow($base1, $i);
            echo "$base1 elevado a $i=$calculo <br/>";
        }
    ?>
</body>
</html>