<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 3 Clave valor</title>
</head>

<body>

    <h1>3.- Crea un programa que calcule el promedio de calificaciones de un estudiante. Utiliza un array clave-valor para almacenar las calificaciones de distintas asignaturas y luego calcula el promedio.</h1>

    <!-- <table border="1"></table> -->
    <?php

    $dias = [
        "1" => "Lunes",
        "2" => "Martes",
        "3" => "Miércoles",
        "4" => "Jueves",
        "5" => "Viernes",
        "6" => "Sábado",
        "7" => "Domingo"
    ];

    foreach ($dias as $key => $value) {
        echo '<table border="1">';
        if (is_array($dias)) {
            echo "<tr>";
            echo "<tr>";
            echo '<td>' . $key . '</td>';
            echo '<td>' . $value . '</td>';
        }
    }
    echo '</table>';



    ?>


</body>

</html>