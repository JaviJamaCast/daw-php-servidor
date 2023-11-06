<?php
$host = "127.0.0.1";
$dbname = "ejerciciosdb";
$user = "root";
$pass = "102813";

function connect($host, $dbname, $user, $pass)
{
    try {
        # MySQL
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function getCompraId($dbh)
{
    $data = array('edad' => 33);
    $stmt = $dbh->prepare("SELECT nombre, apellidos, email, edad FROM alumnos WHERE edad > :edad");
    $stmt->execute($data);
    while ($row = $stmt->fetch()) {
        echo $row['nombre'] . "\n";
        echo $row['apellidos'] . "\n";
        echo $row['email'] . "\n";
        echo $row['edad'] . "\n";
    }
    close();
}

// Get compra devuelve desde la bd una lista con los datos
function getCompra($dbh)
{
    $stmt = $dbh->prepare("SELECT nombre_producto FROM lista_compra");
    $stmt->execute();
    return $listaCompra = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertCompra($dbh, $nombre)
{
    $data = array("nombre_producto" => $nombre);
    $stmt = $dbh->prepare("INSERT INTO lista_compra(nombre_producto) values (:nombre)");
    $stmt->execute($data);
  
}
//Recuerda hacer el switch de las acciones
function close()
{
    $dbh = null;
}
//Llamado de las funciones
$dbh = connect($host, $dbname, $user, $pass);

$lista = getCompra($dbh);

if (isset($_POST["nProducto"])) {
    $nuevoProducto = $_POST["nProducto"];
    insertCompra($dbh, $nuevoProducto);
}
require "index.view.php";
