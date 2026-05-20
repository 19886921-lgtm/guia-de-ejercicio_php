<?php
    $num = $_POST["num"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
</head>
<body>
    <h2>Resultado</h2>
    <?php if ($num % 2 == 0): ?>
        <p>El número <?php echo $num; ?> es PAR.</p>
    <?php else: ?>
        <p>El número <?php echo $num; ?> es IMPAR.</p>
    <?php endif; ?>
    <a href="index.php">Volver al menú</a>
</body>
</html>