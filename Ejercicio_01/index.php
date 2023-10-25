<?php
$temp = null;
$temperatura = null;
$unidad = null;
if (isset($_POST["unidad"]) && isset($_POST["temperatura"])) {

    $temperatura = $_POST["temperatura"];
    $unidad = $_POST["unidad"];
    $temp = calcularTemp($temperatura, $unidad);
}
function calcularTemp($temp, $unidad)
{
    return $unidad == "Celsius" ? ($temp * (9 / 5) + 32) : round((($temp - 32) * 5 / 9),2) ;
}

require "index.view.php";
