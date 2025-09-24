<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formas de recorrer arrays</title>
</head>

<body>
    <h1>Recorrer arrays</h1>

    <?php
    echo "<h2>Arrays normales</h2>";
    $array = [2, 3, 4, 5, 6];

    $arrayClaveValor = ["nombre" => "Álvaro", "apellido" => "Pastor"];

    echo "<h2>Primera manera de recorrer arrays</h2>";
    for ($i = 0; $i < sizeof($array); $i++) {
        echo '<p>' . $array[$i] . ' </p>';
    }


    echo "<h2>Segunda manera de recorrer arrays</h2>";
    foreach ($array as $valor) {
        echo '<p>' . $valor . ' </p>';
    }

    echo "<h2>Tercera manera de recorrer arrays</h2>";
    foreach ($array as $key => $value) {
        echo '<p> La posición en el array ' .  $key . ' tiene valor ' . $valor . ' </p>';
    }

    echo "<h2>Primera manera de recorrer arrays clave valor</h2>";
    foreach ($arrayClaveValor as $value) {
        echo "<p>$value</p>";
    }

    echo "<h2>Primera manera de recorrer arrays clave valor</h2>";
    foreach ($arrayClaveValor as $key => $value) {
        echo "La posición en la tabla $key tiene un valor de $value";
    }








    ?>
</body>

</html>