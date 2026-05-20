<?php
    $num  = $_POST["num"];
    $suma = 0;
    for ($i = 1; $i <= $num; $i++) {
        $suma += $i;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 20</title>
</head>
<body>
    <h2>Suma acumulada del 1 al <?php echo $num; ?></h2>
    <p>La suma de los números del 1 al <?php echo $num; ?> es: <strong><?php echo $suma; ?></strong></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>