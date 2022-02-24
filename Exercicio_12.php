<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label for="numero">Introduce un numero</label><br>
    <input type="number" name="n"> <br>
    <input type="submit" name="Enviar">
    </form>

    <?php

        $fibcero = 0;
        $fibun = 1;
        $n = $_REQUEST['n'];
        
        echo "$fibcero <br>";
        echo "$fibun <br>";

        for ($i=2; $i <=$n ; $i++) { 
            
            $fibactual = $fibcero + $fibun;
            echo "$fibactual <br>";
            $fibcero = $fibun;
            $fibun = $fibactual;
        }





    ?>




</body>
</html>