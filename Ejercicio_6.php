<?php
    $nombre = $_POST["nombre"];
    $edad   = $_POST["edad"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
    <h2>Datos ingresados</h2>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Edad: <?php echo $edad; ?> años</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>