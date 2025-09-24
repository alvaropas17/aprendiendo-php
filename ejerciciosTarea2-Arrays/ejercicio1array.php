<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Arrays</title>
</head>

<body>
    <h1>Hacer comparación de una variable a la que se le asigna un valor entero 5 y de otra con un valor string 5, de todas sus maneras posibles e imprimir por pantalla el resultado.</h1>
    <?php

    $int = 5;
    $str = "5";

    if ($int == $str && $int === $str) {
        echo "$int y $str son números iguales y tienen el mismo tipo de valor.";
    } elseif ($int == $str) {
        echo "$int y $str son el mismo valor pero distinto tipo de dato";
    } else {
        echo "$int y $str son de distinto valor o distinto tipo de dato.";
    }

    ?>

</body>

</html>