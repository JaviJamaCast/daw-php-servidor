<?php
if (isset($_POST["textoIn"])) {
    setcookie("texto", $_POST["textoIn"]);
}
if (isset($_COOKIE["texto"])) {
    $texto = $_COOKIE["texto"];
}
if (isset($_GET["accion"]) && $_GET["accion"] == 'borrar') {
    setcookie("texto", "", -1);
}

require "index.view.php";
