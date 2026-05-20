<?php
    $metros      = $_POST["metros"];
    $centimetros = $metros * 100;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14</title>
</head>
<body>
    <h2>Conversión metros a centímetros</h2>
    <p><?php echo $metros; ?> metros = <?php echo $centimetros; ?> centímetros</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>