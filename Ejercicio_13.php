<?php
    $lado      = $_POST["lado"];
    $perimetro = 4 * $lado;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13</title>
</head>
<body>
    <h2>Perímetro del cuadrado</h2>
    <p>Lado: <?php echo $lado; ?></p>
    <p>Perímetro = 4 x <?php echo $lado; ?> = <?php echo $perimetro; ?></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>