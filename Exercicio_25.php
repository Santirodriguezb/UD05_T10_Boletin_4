<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 25</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Numero: <input type="text" name="numero" autofocus/><br/>
    <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
    <input type="submit" name="Enviar">
    </form>

    <?php
        $numero=(string)$_REQUEST['numero'];
        $al_reves=strrev($numero);
        
        echo "<p>Numero invertido: $al_reves</p>"
    ?>

</body>
</html>