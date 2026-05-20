<?php
    $nombre = $_POST["nombre"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Bienvenido a nuestro sitio</h2>
    <p>¡Bienvenido, <?php echo $nombre; ?>!</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>