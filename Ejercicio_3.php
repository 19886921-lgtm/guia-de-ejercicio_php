<?php
    $num1  = $_POST["num1"];
    $num2  = $_POST["num2"];
    $resta = $num1 - $num2;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <h2>Resultado de la resta</h2>
    <p><?php echo $num1; ?> - <?php echo $num2; ?> = <?php echo $resta; ?></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>