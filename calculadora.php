<?php

if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["operacion"])) {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];

    if ($operacion == "suma") {
        $resultado = $numero1 + $numero2;
        echo $resultado;
    }

    if ($operacion == "resta") {
        $resultado = $numero1 - $numero2;
        echo $resultado;
    }
}

?>