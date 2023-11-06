<?php



if (isset($_POST["textoIn"])) {
    setcookie("texto", $_POST["textoIn"]);
}
if (isset($_COOKIE["texto"])) {
    $texto = $_COOKIE["texto"];
}


require "index.view.php";
