<?php
    $nombre = $_POST["nombre"];
    $horas  = $_POST["horas"];
    $pago   = $_POST["pago"];
    $salario = $horas * $pago;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16</title>
</head>
<body>
    <h2>Salario del empleado</h2>
    <p>Empleado: <?php echo $nombre; ?></p>
    <p>Horas trabajadas: <?php echo $horas; ?></p>
    <p>Pago por hora: $<?php echo number_format($pago, 2); ?></p>
    <p>Salario total: $<?php echo number_format($salario, 2); ?></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>