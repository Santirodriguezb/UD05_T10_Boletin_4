<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
           <form action="ejercicio8.php" method="post">
            <p><input type="text" name="N1"></p>
            <p><input type="submit" value="Tabla"></p>
<?php   
 $numero=$_POST['N1'];
     echo "<table>";
     echo "<tr>";
     echo "<td>Número</td>";
     echo "<td>Multiplicación</td>";
     echo "<td>Solución</td>";
     echo "</tr>";
     for ($i=0; $i <= 10; $i++) {
         $solucion = $numero * $i;
         echo "<tr>";
         echo "<td>$numero</td>";
         echo "<td>$i</td>";
         echo "<td>$solucion</td>";
         echo "</tr>";
     }
     echo "</table>";
?>  
</body>
</html>