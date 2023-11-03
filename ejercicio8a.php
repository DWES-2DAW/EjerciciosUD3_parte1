<?php session_start();
//Almacenamos los mlisegundos en los que hemos entrado a la página 
$_SESSION["timestamp"] = microtime(true);
$date = date("H:i:s");
echo "Hora de entrada: $date";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>

<body>
    <form action="ejercicio8b.php" method="GET"> <input type="submit" name="salir" value="Salir"> </form>
</body>

</html>