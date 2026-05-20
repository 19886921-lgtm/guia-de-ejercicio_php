<?php
    $palabra = $_POST["palabra"];
    $letras  = mb_strlen($palabra);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 21</title>
</head>
<body>
    <h2>Cantidad de letras</h2>
    <p>La palabra "<?php echo $palabra; ?>" tiene <?php echo $letras; ?> letras.</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>