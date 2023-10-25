<?php
$operacion = null;
$num1 = null;
$num2 = null;
$resultado = null;
if (isset($_POST["numero1"]) && isset($_POST["numero2"])) {

    $operacion = $_POST["operacion"];
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $resultado = operaciones($num1, $num2, $operacion);
}
function operaciones($numero1, $numero2, $operacionSel)
{
    switch ($operacionSel) {
        case "Suma":
            return $numero1 + $numero2;
        case  "Resta":
            return  $numero1 - $numero2;
        case "Multiplicacion":
            return  $numero1 * $numero2;
        case "Division":
            return  $numero1 / $numero2;
    }
}

require "index.view.php";
