<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

  <!-- Carrito de compra -->
  <h2>Carrito de Compra</h2>

  <ul id="cart">
    <?php
    // Podría mejorarse el código. En lugar de acceder a la información mediante
    // $_GET, preparando la información necesaria en la lógica de la aplicación.
    foreach ($productos as $id => $producto) {
      if (isset($_GET[$id]) &&  $_GET[$id] > 0) {
    ?>
        <li><?= $producto['nombre'] ?> (<?= $_GET[$id] ?>)</li>
    <?php
      }
    }
    ?>
  </ul>

  <h3>Total: $<span id="total"><?= $importe ?> euros</span></h3>

  <!-- Botón de volver atrás -->
  <a href="index.php">Volver atras</a>
</body>

</html>