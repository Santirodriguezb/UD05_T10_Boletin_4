<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <label for="numero">Combinacion</label>
    <input type="number" name="combinacion"><br>
    <input type="submit" name="Enviar">
    <?php
        
        $combinacionSecreta = "1111";

        if(isset($_REQUEST['combinacion']) && filter_var($_REQUEST['combinacion'],FILTER_VALIDATE_REGEXP, 
        array("options"=>array("regexp"=>"/[0-9]{4}/")))){

            if($_REQUEST['combinacion']==$combinacionSecreta){
                echo "<p>La caja fuerte se ha abierto satisfactoriamente</p>";
            }else{
                echo "<p>Lo siento, esa no es la combinacion</p>";
            }

        }else{
            echo "<p>Introduce un numero de 4 dixitos</p>";
        }




    ?>

</body>
</html>