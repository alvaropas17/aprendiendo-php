<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Arrays</title>
</head>

<body>
    <h1>1.-Crea un array clave-valor con nombres de frutas y sus respectivos colores. Imprime la lista de frutas y colores.</h1>
    <?php

    $valor = [2, 3, 4, 5, 6];

    $arrayClaveValor = [["nombre" => "Álvaro", "apellidos" => "Pastor"], ["nombre" => "Miguel", "apellidos" => "Durán"]];

    $array2 = [[1, 3, 5, 7], [4, 8, 9, 25]];

    // for ($i = 0; $i < sizeof(value: $frutas); $i++) {
    //     echo "";
    // }


    // foreach ($variable as $key => $value) {
    //     # code...
    // }


    $arrayMulti1 = [
        [2, 3, 4, 5, 6],
        // "esto no es un array",
        [7, 8, 9, 10],
        [15, 14, 23]
    ]; // Array multidimensional de valores

    echo "<h1>Primera manera de recorrer un array de múltiples valores.</h1>";
    array_push($arrayMulti1, $array2);

    foreach ($array2 as $value) {
        if (is_array($value)) {
            foreach ($value as $value2) {
                echo "<p>$value2</p>";
            }
        } else echo "<p>$value</p>";
    }


    echo "<h1>Segunda manera de recorrer un array de múltiples valores.</h1>";
    // array_push($arrayMulti1, $array2);

    foreach ($array2 as $value) {
        if (is_array($value)) {
            foreach ($value as $posicion => $value2) {
                echo "<p>En $posicion: se encuentra el valor $value2</p>";
            }
        } else echo "<p>$value</p>";
    }

    echo "<h1>Segunda manera de recorrer un array de múltiples valores.</h1>";
    foreach ($arrayClaveValor as $value) {
        if (is_array($value)) {
            echo '<p>' . $value["nombre"] . ' : ' . $value["apellidos"] . '</p>';
        }
    }

    ?>


</body>

</html>