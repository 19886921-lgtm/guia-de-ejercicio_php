<?php
    $cliente  = $_POST["cliente"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precio   = $_POST["precio"];
    $subtotal = $cantidad * $precio;
    $iva      = $subtotal * 0.13;
    $total    = $subtotal + $iva;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 18</title>
</head>
<body>
    <hr>
    <h2>Factura</h2>
    <p>Cliente: <?php echo $cliente; ?></p>
    <p>Producto: <?php echo $producto; ?></p>
    <p>Cantidad: <?php echo $cantidad; ?></p>
    <p>Precio unitario: $<?php echo number_format($precio, 2); ?></p>
    <p>Subtotal: $<?php echo number_format($subtotal, 2); ?></p>
    <p>IVA (13%): $<?php echo number_format($iva, 2); ?></p>
    <p><strong>Total a pagar: $<?php echo number_format($total, 2); ?></strong></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>