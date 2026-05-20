<?php
    $dolares = $_POST["dolares"];
    $tasa    = 0.92;
    $euros   = $dolares * $tasa;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 22</title>
</head>
<body>
    <h2>Conversión dólares a euros</h2>
    <p>$<?php echo number_format($dolares, 2); ?> USD = €<?php echo number_format($euros, 2); ?> EUR</p>
    <p><small>Tasa de cambio: 1 USD = <?php echo $tasa; ?> EUR</small></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>