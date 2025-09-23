<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 12 - Switch</title>
</head>
<body>
    
<h3>Crear con un switch un programa que dada una variable si esta tiene el valor 'alto' imprima por pantalla 'el valor es alto' y si tiene el valor 'bajo' imprima por pantalla 'el valor es bajo'.
</h3>

<?php

    $valor = "alto";

    switch ($valor) {
        case 'alto':
            echo "El valor es alto.";
            break;
        case 'bajo':
            echo "El valor es bajo.";
            break;
        default:
            # code...
            break;
    }

?>
</body>
</html>