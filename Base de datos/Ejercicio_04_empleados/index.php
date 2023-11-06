<?php

use function PHPSTORM_META\type;

require("funciones.php");
$host = "127.0.0.1";
$dbname = "ejerciciosdb";
$user = "root";
$pass = "102813";




function realizarAccion($accion, $dbh)
{
    switch ($accion) {
        case "insert":
            if (
                isset($_POST["nombre"]) && isset($_POST["apellidos"]) && isset($_POST["edad"]) && isset($_POST["fechaN"])
                && isset($_POST["email"]) && isset($_POST["dni"]) && isset($_POST["genero"]) && isset($_POST["curriculum"])
            ) {
                $fecha = date('Y-m-d', strtotime(str_replace('/', '-', $_POST["fechaN"])));
                $data = array(
                    'nombre' => $_POST["nombre"], 'apellidos' => $_POST["apellidos"], 'edad' => intval($_POST["edad"]),
                    'fecha_nacimiento' => $fecha, 'email' => $_POST["email"], 'dni' => $_POST["dni"],
                    'genero' => $_POST["genero"], 'curriculum' => $_POST["curriculum"]
                );
                insertEmpleado($dbh, $data);
                header("Location: index.php");
                exit;
            }
            break;
        case "eliminarE":
            if (isset($_POST["id"])) {
                $id = $_POST["id"];
                eliminarId($dbh, $id);
                header("Location: index.php");
                exit;
            }
            break;
        case "detalles":
            if (isset($_POST["id"])) {
                $id = $_POST["id"];
                $empleado = getEmpleadoId($dbh, $id);
                require_once "views/detalle.view.php";

                exit;
            }
            break;
        case "buscar":
            if (isset($_POST["nombreB"])) {
                $nombre = $_POST["nombreB"];
                if ($nombre == "") {
                    $empleados = getEmpleados($dbh);
                } else {
                    $empleados = getEmpleadosNombre($dbh, $nombre);
                }
            }
            require "views/index.view.php";
            exit;


        case "vaciar":
            eliminar($dbh);
            header("Location: index.php");
            exit;
    }
}
//Llamado de las funciones
$dbh = connect($host, $dbname, $user, $pass);
$empleados = getEmpleados($dbh);
if (isset($_POST["accion"])) {
    realizarAccion($_POST["accion"], $dbh);
}
require "views/index.view.php";
