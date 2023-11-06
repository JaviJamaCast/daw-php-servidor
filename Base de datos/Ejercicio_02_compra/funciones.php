<?php
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

// Get compra devuelve desde la bd una lista con los datos
function getCompra($dbh)
{
    $stmt = $dbh->prepare("SELECT * FROM lista_compra");
    $stmt->execute();
    return $listaCompra = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertCompra($dbh, $nombreP)
{
    $data = array('nombre_producto' => $nombreP);
    $stmt = $dbh->prepare("INSERT INTO lista_compra(nombre_producto) values (:nombre_producto)");
    $stmt->execute($data);
    close();
}

function eliminarId($dbh, $id)
{
    $data = array('id' => $id);
    $stmt = $dbh->prepare("DELETE FROM lista_compra WHERE id =(:id)");
    $stmt->execute($data);
    close();
}

function eliminar($dbh)
{
    $stmt = $dbh->prepare("DELETE FROM lista_compra");
    $stmt->execute();
    close();
}

function close()
{
    $dbh = null;
}
