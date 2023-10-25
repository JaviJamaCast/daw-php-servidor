<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> Prueba suerte </h2>
    <?php
    if ($numero != null) {
        echo implode(", ", $numeros);
        echo  "<p> El numero " . $numero . " aparece  " . $cont . " en el array </p>";
    }
    ?>

    <form action="index.php" method="post">
        Introduce tu numero: <input type="number" name="numero"><br>

        <input type="submit" value="Probar suerte">
    </form>

</body>


</html>