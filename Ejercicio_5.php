<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <h2>Resultado de la división</h2>
    <?php if ($num2 == 0): ?>
        <p>Error: no se puede dividir entre cero.</p>
    <?php else: ?>
        <p><?php echo $num1; ?> / <?php echo $num2; ?> = <?php echo $num1 / $num2; ?></p>
    <?php endif; ?>
    <a href="index.php">Volver al menú</a>
</body>
</html>