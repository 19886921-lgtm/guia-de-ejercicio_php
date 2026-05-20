<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $multiplicacion = $num1 * $num2;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
    <h2>Resultado de la multiplicación</h2>
    <p><?php echo $num1; ?> x <?php echo $num2; ?> = <?php echo $multiplicacion; ?></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>