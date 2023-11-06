<?php include 'views/partials/head.php'; ?>

<h1>Lista de Empleados</h1>
<form class="inBuscar" action="index.php" method="post">
    Buscar: <input type="text" name="nombreB">
    <input type="hidden" name="accion" value="buscar">
    <input type="submit">
</form>
<div class="container-index">

    <table class="table">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado) : ?>
                <tr>
                    <td><?= $empleado['dni'] ?></td>
                    <td><?= $empleado['nombre'] ?></td>
                    <td><?= $empleado['apellidos'] ?></td>
                    <td>
                        <form class="formPost" action="index.php" method="post">
                            <input type="hidden" name="accion" value="detalles">
                            <input type="hidden" name="id" value="<?= $empleado['id'] ?>">
                            <input type="submit" value="Ver detalles">
                        </form>
                        <form class="formPost" action="index.php" method="post">
                            <input type="hidden" name="accion" value="eliminarE">
                            <input type="hidden" name="id" value="<?= $empleado['id'] ?>">
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form class="add-form" action="index.php" method="post">

        <h2>Añadir Empleado</h2>
        <input type="hidden" name="accion" value="insert">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos">
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" name="edad">
        </div>
        <div class="form-group">
            <label for="fechaN">Fecha de nacimiento:</label>
            <input type="date" name="fechaN">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email">
        </div>
        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" name="dni">
        </div>
        <div class="form-group">
            <label for="genero">Género:</label>
            <select name="genero">
                <option value="Mujer">Mujer</option>
                <option value="Hombre">Hombre</option>
            </select>
        </div>
        <div class="form-group">
            <label for="curriculum">Curriculum:</label>
            <textarea name="curriculum"></textarea>
        </div>
        <input type="submit" value="Añadir">
    </form>
</div>

<?php include 'views/partials/footer.php'; ?>