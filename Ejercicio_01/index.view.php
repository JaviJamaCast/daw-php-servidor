<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if ($temp != null && $unidad != null && $temperatura != null && $unidad == "Farenheit") {
       echo  "<p> La temperatura en Celsius de (" . $temperatura . " " . $unidad . ") es: " . $temp . "</p>";
    } elseif ($temp != null && $unidad != null && $temperatura != null && $unidad == "Celsius") {
       echo "<p> La temperatura en Farenheit de (" . $temperatura . " " . $unidad . ") es: " . $temp . "</p>";
    }
    ?>

    <form action="index.php" method="post">
        Introduce la temperatura: <input type="number" name="temperatura"><br>
        Indica la unidad de la temperatura introducida: <select name="unidad">
            <option value="Celsius">Celsius</option>
            <option value="Farenheit" selected>Farenheit</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

</body>


</html>