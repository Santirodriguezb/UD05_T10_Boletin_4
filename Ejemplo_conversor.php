<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Conversor</h1>
    <form action="Ejemplo_conversor.php" method="post">
    Introduce cuantos euros quieres cambiar :<input type="text" name="euros">
    <p><select name="seleccion">
                <option selected value="0">Pesetas</option>
                <option selected value="1">Rublos</option>
                <option selected value="2">Dolares</option>
                <option selected value="3">Yens</option>
        </select></p>

        <input type="submit" value="Enviar" name="Enviar"/>
    <!-- <input type="submit" value="Pesetas" name="pesetas"/>
    <input type="submit" value="Rublos" name="rublos"/>
    <input type="submit" value="Dolares" name="dolares"/>
    <input type="submit" value="Yens" name="yens"/>
   </form> -->
<?php
    
     $euro = $_GET['euros'];
       $seleccion = $_REQUEST['seleccion'];
       $pesetas=($_REQUEST['euros'])*166;
       $rublos=($_REQUEST['euros'])*144;
       $dolares=($_REQUEST['euros'])*(1.10);
       $yenes=($_REQUEST['euros'])*(130.70);

    if (!isset($_REQUEST['euros'])) {
    echo "introduce algún número";
}elseif (filter_var($_REQUEST['euros'],FILTER_VALIDATE_INT)) {
    if ($_REQUEST['seleccion']==0) {
    echo "$euro son $pesetas pesetas "."</br>";
    }elseif ($_REQUEST['seleccion']==1) {
    echo "$euro son $rublos rublos "."</br>";
    }elseif ($_REQUEST['seleccion']==2){
    echo "$euro son $dolares dolares "."</br>";
    }elseif ($_REQUEST['seleccion']==3) {
    echo "$euro son $yenes yens"."</br>";
}
}else {
    echo "introduce un numero!";
 }
?>
</body>
</html>