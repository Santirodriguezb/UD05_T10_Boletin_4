<?php
    session_name('positivos-negativos');
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
    <input type="number" name="numero" autofocus> <br>
    <input type="submit" name="Enviar">
    </form>

    <?php
        if(!isset($_SESSION['intentos'])){
            $_SESSION['intentos']=0;
            $_SESSION['positivos']=0;
            $_SESSION['negativos']=0;
        }else {
            $_SESSION['intentos']++;
        }

        if ($_SESSION['intentos'] <=10) {
            if(isset($_POST['numero']) && filter_var($_POST['numero'],
            FILTER_VALIDATE_INT)){
                if($_POST['numero']<0){
                    $_SESSION['negativos']++;
                }else{
                    $_SESSION['positivos']++;
                }
            }

            

        }else{
            $positivos=$_SESSION['positivos'];
            $negativos=$_SESSION['negativos'];
            echo "<p>Insertaches $positivos e $negativos</p>";

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
        }

    ?>
</body>
</html>