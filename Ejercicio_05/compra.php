<?php
/*** DATOS ***/
require 'datos.php';

/*** FUNCIONES ***/
function calcularImporte($productos){
    $total = 0;
    foreach ($productos as $id => $producto){
        if (isset($_GET[$id])) {
            $total = $total + $producto["precio"]*$_GET[$id];
        }
    }
    return $total;
}

// Calcular el importe total
$importe = calcularImporte($productos);
// Cargar la vista
require 'pagina2.php';