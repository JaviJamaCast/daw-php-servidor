<?php
$cont = 0;
$numero = null;
$numeros = [];
for ($i = 0; $i < 20; $i++) {

    array_push($numeros, random_int(1, 15));
}

if (isset($_POST["numero"])) {

    $numero = $_POST["numero"];
    foreach ($numeros as $num) {

        if ($num == $numero) {
            $cont++;
        }
    }
}

require "index.view.php";
