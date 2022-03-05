<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Numero 1: <input type="text" name="numero1" autofocus/><br/>
    Numero 2: <input type="text" name="numero2" autofocus/><br/>
    <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
    <input type="submit" name="Enviar">
    </form>

    <?php
    $numero1=$_REQUEST['numero1'];
    $numero2=$_REQUEST['numero2'];

    if ($numero1 < $numero2) {

        $inicio=$numero2 + 1;
        $final=$numero1;
        for ($i=$inicio; $i < $final ; $i+=7) { 
            echo "<p>$i</p>";
        }
    }elseif ($numero1 > $numero2) {
        $inicio=$numero1 + 1;
        $final=$numero2;
        for ($i=$inicio; $i <$final; $i+=7) { 
            echo "<p>$i</p>";
        }
    }else{
        echo "Los numeros introducidos son iguales, porfavor introduce unos diferentes";
    }


    ?>
</body>
</html>