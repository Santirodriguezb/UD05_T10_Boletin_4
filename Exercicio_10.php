<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label for="numero">Introduce un numero</label><br>
    <input type="number" name="numero"> <br>
    <input type="submit" name="Enviar">
    </form>
    <?php

        if(!isset($_SESSION['numeros'])){

            $numeros = array();
            $_SESSION['numeros']= array();

        }
        $numeros = array();
        if(isset($_REQUEST['numero'])
        && filter_var($_REQUEST['numero'],FILTER_VALIDATE_INT) && $_REQUEST['numero']>=0){
            
            $n = $_REQUEST['numero'];
            array_push($_SESSION['numeros'],$n);
            
        } else if (isset($_REQUEST['numero'])
        && filter_var($_REQUEST['numero'],FILTER_VALIDATE_INT) && $_REQUEST['numero']<0) {
            
            $suma = 0;
            for ($i=0 ; $i < count($_SESSION['numeros']) ; $i++ ) { 
                $suma = $suma + $_SESSION['numeros'][$i];
            }

            $media = $suma / count($_SESSION['numeros']);

            echo "<p>A media é: $media</p>";


            // Destruir todas las variables de sesión.
            $_SESSION = array();

            // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
            // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
             );
            }           

            // Finalmente, destruir la sesión.
            session_destroy();



        }else {
            echo "<p>Introduce un numero. </p>";
        }
    ?>
</body>
</html>