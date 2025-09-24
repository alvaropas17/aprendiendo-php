<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 4 Clave valor</title>
</head>

<body>
    <h1>3.- Crea un programa que calcule el promedio de calificaciones de un estudiante. Utiliza un array clave-valor para almacenar las calificaciones de distintas asignaturas y luego calcula el promedio.</h1>
    
    <?php
    $calificaciones = [
        "Matemáticas" => 6.4,
        "Lengua" => 9.3,
        "Historia" => 5.0,
        "Programación" => 6.3
    ];

    $calificacionPromedio = [];
    $sumaNotas = 0;
    foreach ($calificaciones as $key => $value) {
        if (is_array($calificaciones)) {
            array_push($calificacionPromedio, $value);
            $sumaNotas += $value;
        }
    }

    (double) $mediaNotas = $sumaNotas / (count($calificacionPromedio) - 1);
    echo "<p> Este es el array impreso por pantalla</p>";
    print_r($calificacionPromedio);

    echo "<h3>La media de las notas de la clase es: $mediaNotas</h3>";





    ?>
</body>

</html>