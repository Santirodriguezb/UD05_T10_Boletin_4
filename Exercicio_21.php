<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_SESSION["impares"])) {
        $_SESSION["impares"] = array();
    }
    if (!isset($_SESSION["pares"])) {
        $_SESSION["pares"] = array();
    }
    if(!isset($_REQUEST["N1"])){
        ?>
        <form action="Exercicio_21.php" method="post">
            Escriba un número: <input type="text" name="N1" autofocus/><br />
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
    }
    if (isset($_REQUEST["N1"]) && $_REQUEST["N1"] > 0) {
        if (isset($_REQUEST["N1"])) {
            array_push($_SESSION["pares"], $_REQUEST["N1"]);
        }
        if (isset($_REQUEST["N1"]) && $_REQUEST["N1"] % 2!=0) {
            array_push($_SESSION["impares"], $_REQUEST["N1"]);
         } ?>
    <form action="Exercicio_21.php" method="post">
        Escriba un número: <input type="text" name="N1" autofocus/><br />
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    } else if(isset($_REQUEST["N1"])){
        $countimpares = count($_SESSION["impares"]);
        $sumarray = array_sum($_SESSION["impares"]);
        $mediaimpares = $sumarray / $countimpares;
        $countotal = $countarray + $countimpares;
        $maxpar = max($_SESSION["numeros"]);
        
        echo "El mayor número de los pares es: $maxpar </br>";
        echo "La media de los números impares es: $mediaimpares </br>";
        echo "As introducido $countotal números.";
       
        // borrar sesion
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                "",
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        session_destroy();
    }
   
    ?>
</body>
</html>