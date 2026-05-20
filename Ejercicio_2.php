<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $suma = $num1 + $num2;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <h2>Resultado de la suma</h2>
    <p><?php echo $num1; ?> + <?php echo $num2; ?> = <?php echo $suma; ?></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>