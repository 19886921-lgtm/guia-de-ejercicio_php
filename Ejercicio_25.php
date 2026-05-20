<?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $ciudad = $_POST["ciudad"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 25</title>
</head>
<body>
    <h2>Datos del usuario</h2>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Correo: <?php echo $correo; ?></p>
    <p>Ciudad: <?php echo $ciudad; ?></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>