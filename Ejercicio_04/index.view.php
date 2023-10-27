<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="divLog">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="usuario">Nombre de usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="contra">Contraseña:</label>
                <input type="password" id="contra" name="contra" required>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if ($datosComprobados) {
                echo "<h3 class='loginOk'> Bienvenido! <strong> $usuario</strong> </h3>";
            } else {
                echo "<h3 class='loginNoOk'> Usuario y/o contraseña incorrectos </h3>";
            }
        }
        ?>
    </div>


</body>

</html>