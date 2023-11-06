<?php
require("funciones.php");
$host = "127.0.0.1";
$dbname = "ejerciciosdb";
$user = "root";
$pass = "102813";




function realizarAccion($accion, $dbh)
{
    switch ($accion) {
        case "insert":
            if (isset($_POST["nProducto"])) {
                $nProducto = $_POST["nProducto"];
                insertCompra($dbh, $nProducto);
                header("Location: index.php");
                exit;
            }
            break;
        case "eliminarP":
            if (isset($_POST["id"])) {
                $id = $_POST["id"];
                eliminarId($dbh, $id);
                header("Location: index.php");
                exit;
            }
            break;
        case "vaciar":
            eliminar($dbh);
            header("Location: index.php");
            exit;
    }
}
//Llamado de las funciones
$dbh = connect($host, $dbname, $user, $pass);

$lista = getCompra($dbh);
if (isset($_POST["accion"])) {
    realizarAccion($_POST["accion"], $dbh);
}
require "index.view.php";
