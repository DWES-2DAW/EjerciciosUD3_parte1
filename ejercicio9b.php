<?php 
    if (isset($_POST["aceptarCookies"])) {
        setcookie("aceptarCookies", true, time() + 365 * 24 * 60);
        echo "<p>Gracias por aceptar nuestras Cookies!!</p>";
    }
