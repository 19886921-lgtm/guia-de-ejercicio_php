<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
    <h2>Número menor</h2>
    <?php if ($num1 < $num2): ?>
        <p>El número menor es: <?php echo $num1; ?></p>
    <?php elseif ($num2 < $num1): ?>
        <p>El número menor es: <?php echo $num2; ?></p>
    <?php else: ?>
        <p>Ambos números son iguales.</p>
    <?php endif; ?>
    <a href="index.php">Volver al menú</a>
</body>
</html>