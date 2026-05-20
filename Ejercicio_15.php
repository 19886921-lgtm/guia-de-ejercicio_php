<?php
    $celsius    = $_POST["celsius"];
    $fahrenheit = ($celsius * 9 / 5) + 32;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 15</title>
</head>
<body>
    <h2>Conversión Celsius a Fahrenheit</h2>
    <p><?php echo $celsius; ?> °C = <?php echo $fahrenheit; ?> °F</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>