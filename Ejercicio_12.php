<?php
    $base   = $_POST["base"];
    $altura = $_POST["altura"];
    $area   = $base * $altura;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>
<body>
    <h2>Área del rectángulo</h2>
    <p>Base: <?php echo $base; ?></p>
    <p>Altura: <?php echo $altura; ?></p>
    <p>Área = <?php echo $base; ?> x <?php echo $altura; ?> = <?php echo $area; ?></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>