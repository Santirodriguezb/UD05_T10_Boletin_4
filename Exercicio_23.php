<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 23</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['numeros'])){
            $_SESSION['numeros']=array();
        }

        if(isset($_REQUEST['numero'])){
            array_push($_SESSION['numeros'],$_REQUEST['numero']);
            $suma_numeros=array_sum($_SESSION['numeros']);
        }

        if($suma_numeros <= 9999){
            ?>
        <form action="Exercicio_23.php" method="post">
        Escriba un número: <input type="text" name="numero" autofocus/><br />
        <input type="submit" name="enviar" value="Enviar">
        </form>
         
        <?php
        } else if(isset($_REQUEST["numero"])){
         $contador=count($_SESSION['numeros']);
         $media=$suma_numeros / $contador;

         echo "<p>O contador de numeros da o seguinte resultado: $contador</p>";
         echo "<p>A media é : $media</p>";
         echo "<p>O total acumulado é : $$suma_numeros</p>";

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