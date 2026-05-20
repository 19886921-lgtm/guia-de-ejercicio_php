<?php
    $nota1    = $_POST["nota1"];
    $nota2    = $_POST["nota2"];
    $nota3    = $_POST["nota3"];
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11</title>
</head>
<body>
    <h2>Resultado del estudiante</h2>
    <p>Promedio: <?php echo number_format($promedio, 2); ?></p>
    <?php if ($promedio >= 6): ?>
        <p>El estudiante ha APROBADO.</p>
    <?php else: ?>
        <p>El estudiante ha REPROBADO.</p>
    <?php endif; ?>
    <a href="index.php">Volver al menú</a>
</body>
</html>