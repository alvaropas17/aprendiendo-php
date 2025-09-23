<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 9 - Valor random por pantalla</title>
</head>
<body>
    <?php 
    
    echo "<h1>Sabiendo que la función RAND nos retorna un valor aleatorio entre un rango de dos enteros, imprimir pon pantalla Activo si es un número del 1 al 5 y No Activo si es un número del 6 al 10.
</h1>";
    $valorRandom = rand(1,10);

    if ( $valorRandom >= 1 && $valorRandom <= 5) {
        # code...

        echo "El valor random es " . $valorRandom . " es Activo";
    } elseif ($valorRandom >= 6 && $valorRandom <= 10) {
        # code...
        echo $valorRandom . "No Activo";
    }
    
    ?>
</body>
</html>