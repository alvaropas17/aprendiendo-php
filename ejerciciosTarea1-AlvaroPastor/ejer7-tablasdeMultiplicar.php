<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 7 - Tablas de multiplicar</title>
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <p>Crear una página web que mediante el uso de PHP  que muestre por pantalla las  tablas de multiplicar del 1 al 5.
</p>

    <?php 

    echo '<table border="1">';
    echo "<tr>";
    for ($i=1; $i < 6; $i++) { 
        # code...
        echo "<th>Tabla de multiplicar del " . $i . "</th>";
        for ($a=0; $a < 10; $a++) { 
            # code...
            $mult = $i* $a;
            echo "<tr>";
            echo "<td>$i x $a = $mult</td>";
            echo "</tr>";
        }
        echo "</tr>";
    }

    ?>
</body>
</html>