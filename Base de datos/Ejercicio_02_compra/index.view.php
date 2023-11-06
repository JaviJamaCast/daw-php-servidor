<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($lista as $producto) : ?>
            <li> <?= $producto['nombre_producto'] ?> (<form class="formBorrarId" ction="index.php" method="post"><input type="hidden" name="accion" value="eliminarP"><input type="hidden" name="id" value="<?= $producto['id'] ?>"><input type="submit" value="Eliminar"></form>)</li>
        <?php endforeach ?>
    </ul>
    <h2>Añadir elemento</h2>
    <form action="index.php" method="post">
        <input type="text" name="nProducto">
        <input type="hidden" name="accion" value="insert">
        <input type="submit" value="Añadir">
    </form>
    <form action="index.php" method="post">
        <input type="hidden" name="accion" value="vaciar">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
        <input type="submit" value="Vaciar lista">
    </form>
</body>


</html>