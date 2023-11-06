<?php

$usuarios = array(
    "javi" => array(
        "nombre" => 'Javier',
        "apellidos" => 'Jamaica',
        "password" => '123'
    ),
    "gatitaLoca123" => array(
        "nombre" => 'Amaia',
        "apellidos" => 'Perez',
        "password" => '12345'
    )
);
if (isset($_POST["usuario"]) && isset($_POST["contra"])) {
    $usuario = $_POST["usuario"];
    $contrasenya = $_POST["contra"];
    $datosComprobados =  comprobarDatos($usuario, $contrasenya, $usuarios);
}
function comprobarDatos($usuario, $contrasenya, $usuarios)
{
    if (key_exists($usuario, $usuarios) && $usuarios[$usuario]["password"] == $contrasenya) {
        return true;
    }
    return false;
}




require "index.view.php";
