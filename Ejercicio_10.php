<?php
    $nota1   = $_POST["nota1"];
    $nota2   = $_POST["nota2"];
    $nota3   = $_POST["nota3"];
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10</title>
</head>
<body>
    <h2>Promedio del estudiante</h2>
    <p>Nota 1: <?php echo $nota1; ?></p>
    <p>Nota 2: <?php echo $nota2; ?></p>
    <p>Nota 3: <?php echo $nota3; ?></p>
    <p>Promedio: <?php echo number_format($promedio, 2); ?></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>