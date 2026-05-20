<?php
    $precio = $_POST["precio"];
    $iva    = $precio * 0.13;
    $total  = $precio + $iva;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 23</title>
</head>
<body>
    <h2>Precio con IVA</h2>
    <p>Precio sin IVA: $<?php echo number_format($precio, 2); ?></p>
    <p>IVA (13%): $<?php echo number_format($iva, 2); ?></p>
    <p><strong>Total con IVA: $<?php echo number_format($total, 2); ?></strong></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>