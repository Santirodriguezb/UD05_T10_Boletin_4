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
    <label for="numero">Introduce un numero para la base</label><br>
    <label for="numero">Introduce un numero para el expoñente</label><br>
    <input type="number" name="base"> <br>
    <input type="number" name="exponente"> <br>
    <input type="submit" name="Enviar">
    </form>

    <?php
        $base = $_REQUEST['base'];
        $exponente = $_REQUEST['exponente'];

        if (!isset($base)) {
            echo "<p>Introduce lo pedido en el formulario</p>";

        } else {
            $potencia = 1;
        
        if ($exponente == 0) {
            $potencia = 1;
        }

        if ($exponente > 0) {
            for ($i=1; $i < $exponente ; $i++) { 
                $potencia = pow($base, $i) ;
                echo "<p>A $base e o $i = $potencia</p>";

            }
        }
        }

    ?>
</body>
</html>