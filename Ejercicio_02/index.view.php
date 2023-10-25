<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> Calculadora </h2>
    <?php
    if ($num1 != null && $num2 != null && $resultado != null) {
        echo  "<p> La " . strtolower($operacion) . " de " . $num1 . " y " . $num2 . " es: " . $resultado . "</p>";
    }
    ?>

    <form action="index.php" method="post">
        Primer numero: <input type="number" name="numero1"><br>
        Segundo numero: <input type="number" name="numero2"><br>
        Indica la operacion que quieres realizar: <select name="operacion">
            <option value="Suma">Suma</option>
            <option value="Resta" selected>Resta</option>
            <option value="Division" selected>Division</option>
            <option value="Multiplicacion" selected>Multiplicacion</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

</body>


</html>