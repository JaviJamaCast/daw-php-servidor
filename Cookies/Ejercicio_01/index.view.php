<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($texto)) : ?>

        <p>Texto almacenado: <?= $texto ?></p>

    <?php else : ?>

        <p>No hay ningún texto almacenado</p>

    <?php endif; ?>

    <form action="index.php" method="post">
        Introduce el texto que deseas almacenar: <input type="text" name="textoIn">

        <input type="submit" value="Enviar">
    </form>

</body>


</html>