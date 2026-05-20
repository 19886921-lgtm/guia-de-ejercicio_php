<?php
    $edad        = $_POST["edad"];
    $edadFutura  = $edad + 10;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 24</title>
</head>
<body>
    <h2>Edad en 10 años</h2>
    <p>Edad actual: <?php echo $edad; ?> años</p>
    <p>Dentro de 10 años tendrás: <?php echo $edadFutura; ?> años</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>