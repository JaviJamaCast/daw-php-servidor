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
function getEmpleados($dbh)
{
    $stmt = $dbh->prepare("SELECT * FROM empleados");
    $stmt->execute();
    return $empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getEmpleadosNombre($dbh, $nombre)
{
    $data = array('nombre' => $nombre);
    $stmt = $dbh->prepare("SELECT * FROM empleados WHERE nombre= (:nombre)");
    $stmt->execute($data);
    return $empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getEmpleadoId($dbh, $id)
{
    $data = array('id' => $id);
    $stmt = $dbh->prepare("SELECT * FROM empleados WHERE id= (:id)");
    $stmt->execute($data);
    return $empleado = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function insertEmpleado($dbh, $data)
{

    $stmt = $dbh->prepare("INSERT INTO empleados values (null,:nombre, :apellidos, :edad, :fecha_nacimiento,:email, :dni, :genero, :curriculum)");
    $stmt->execute($data);
    close();
}

function eliminarId($dbh, $id)
{
    $data = array('id' => $id);
    $stmt = $dbh->prepare("DELETE FROM empleados WHERE id =(:id)");
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
