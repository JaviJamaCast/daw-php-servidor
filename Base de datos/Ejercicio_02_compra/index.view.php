<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        foreach ($lista as $id => $producto) : ?>
            <li> <?= $producto['nombre_producto'] ?></li>
        <?php endforeach ?>
    </ul>
    <h2>Añadir elemento</h2>
    <form method="post">
        <input type="text" name="nProducto">
        <button type="submit">Añadir</button>
    </form>
</body>


</html>