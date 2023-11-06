<!DOCTYPE html>
<html>

<head>
    <title>Tienda en Línea</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Tienda en Línea</h1>
    <form action="compra.php" method="get">
        <div class="product-list">

            <?php if (!empty($productos)) : ?>
                <?php foreach ($productos as $id => $producto) : ?>
                    <div class="product">
                        <h2> <?= $producto['nombre'] ?> </h2>
                        <p> <?= $producto['descripcion'] ?> </p>
                        <p> <?= "Precio: " . $producto['precio'] ?> </p>
                        <label> <input type='number' name='<?= $id ?>' value='0' required></label>
                    </div>
                <?php endforeach ?>
            <?php else : ?>
                <p>No hay productos disponibles en este momento.</p>
            <?php endif ?>

        </div>



        <input type="submit" value="Comprar" class="btn-primary">
    </form>

</body>

</html>