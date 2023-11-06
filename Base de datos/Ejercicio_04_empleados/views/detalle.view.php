<!DOCTYPE html>
<html lang="en">
<?php include 'views/partials/head.php'; ?>


<body>

    <h2>Detalles del empleado</h2>
    <a href="index.php"><button class="btnVolver">Volver</button></a>
    <div class="container">
        <ul class="details">
            <?php foreach ($empleado as $emp) : ?>
                <li><strong>Nombre:</strong> <?= $emp['nombre'] ?></li>
                <li><strong>Apellidos:</strong> <?= $emp['apellidos'] ?></li>
                <li><strong>Edad:</strong> <?= $emp['edad'] ?></li>
                <li><strong>Fecha de nacimiento:</strong> <?= date("d/m/Y", strtotime($emp['fecha_nacimiento'])); ?></li>
                <li><strong>Email:</strong> <?= $emp['email'] ?></li>
                <li><strong>DNI:</strong> <?= $emp['dni'] ?></li>
                <li><strong>Género:</strong> <?= $emp['genero'] ?></li>
                <li><strong>Curriculum:</strong> <?= $emp['curriculum'] ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php include 'views/partials/footer.php'; ?>