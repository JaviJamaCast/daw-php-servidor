<?php

$host = "127.0.0.1";
$dbname = "ejerciciosdb";
$user = "root";
$pass = "102813";
$dbh = connect($host, $dbname, $user, $pass);
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
function getCompra($dbh)
{
    $stmt = $dbh->prepare("SELECT nombre, apellidos, email ,edad FROM alumnos");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo $row['nombre'] . "\n";
        echo $row['apellidos'] . "\n";
        echo $row['email'] . "\n";
        echo $row['edad'] . "\n";
    }
    close();
}

function insertCompra($dbh)
{
    $data = array('nombre' => "Lulu", 'apellidos' => "Castaño", 'email' => "lulu@gmail.com", 'edad' => 33);
    $stmt = $dbh->prepare("INSERT INTO alumnos(nombre, apellidos,email,edad) values (:nombre, :apellidos, :email, :edad)");
    $stmt->execute($data);
    close();
}
function close()
{
    $dbh = null;
}

getCompra($dbh);
insertCompra($dbh);
getCompra($dbh);
require "index.view.php";
