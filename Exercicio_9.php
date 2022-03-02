<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
<form action="ejercicio9.php" method="post">
        Escriba un número: <input type="text" name="N1"/><br />
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>" >
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
<?php
$number = $_POST['N1'];
$contar = strlen(abs($number));
        echo "Este número tiene $contar digitos";
?>
</body>
</html>