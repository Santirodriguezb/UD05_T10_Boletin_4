<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label for="numero">Introduce un numero</label><br>
    <input type="number" name="numero"> <br>
    <input type="submit" name="Enviar">
    </form>

    <?php

        $positivos = 0;
        $negativos = 0;
        $numero = $_REQUEST['numero'];

        if(isset($_REQUEST['numero'])
        && filter_var($_REQUEST['numero'],FILTER_VALIDATE_INT) && $_REQUEST['numero']>=0){

            for ($i=0; $i < count($_REQUEST['numero']) ; $i++) { 
                echo "<p>O reconto de positivos é: $i</p>";
            }


        }else if (isset($_REQUEST['numero'])
        && filter_var($_REQUEST['numero'],FILTER_VALIDATE_INT) && $_REQUEST['numero']<0){


        }    







    ?>





</body>
</html>