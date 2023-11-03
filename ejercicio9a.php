<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
</head>

<body> <?php if (!isset($_COOKIE["aceptarCookies"])) { ?> <h2>Cookies</h2>
        <form action="ejercicio9b.php" method="POST">
            <p>Este sitio web utiliza cookies para mejorar la experiencia de usuario.
                Para seguir navegando por nuestra web deberás aceptar la política de cookies.
                <a href="#">Leer más</a> <a href="#"> Política de privacidad y cookies</a>
            </p>
            <p> <input type="submit" name="aceptarCookies" value="Aceptar"> </p>
        </form> <?php } ?>
</body>

</html>