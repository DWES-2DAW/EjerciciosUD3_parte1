<?php session_start();
if (isset($_GET["salir"])) {
    if (isset($_SESSION["timestamp"])) {
        //Devuelve los milisegundos iniciales 
        $segundosIniciales = $_SESSION["timestamp"];
        //Obtenemos los milisegundos actuales 
        $_SESSION["timestamp"] = microtime(true);
        //Realizamos la resta entre los milisegundos finales e iniciales 
        $segundosActuales = $_SESSION["timestamp"] - $segundosIniciales;
        echo "<p>Ústed ha permanecido en la página " . gmdate("H:i:s", $segundosActuales) . " horas</p>";
    } else {
        echo "<a href='ejercicio8a.php'>Volver</a>";
    }
} //Eliminamos el arrar con los datos de la sesión 
$_SESSION = array(); 
//Eliminamos la cookie de la sesión 
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), "", time() - 42000, "/");
}
