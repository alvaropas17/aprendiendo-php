<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array clave valor</title>
</head>

<body>
    <?php

    $arrayFrutas = [
        ["Manzana" => "rojo"],
        ["Pera" => "verde"],
        ["Ciruela" => "violeta"]
    ];

    $ArrayFrutasComplicado = [
        ["fruta" => "plátano", "color" => "amarillo"],
        ["fruta" => "arándano", "color" => "azul"],
        ["fruta" => "fresa", "color" => "verde"]
    ];

    echo '<p> Lista de frutas y colores</p>';
    // foreach ($ArrayFrutasComplicado as $key => $value) {
    //     if (is_array($key)) {
    //         echo '<p>' . $key["fruta"] . ' : ' . $key["color"] . '</p>';
    //     }
    // }

    foreach ($ArrayFrutasComplicado as $fruta) {
        if (is_array($fruta)) {
            echo '<p>' . $fruta["fruta"] . ' : ' . $fruta["color"] . '</p>';
        }
    }


    echo "<h3>Primera manera de recorrer el array</h3>";
    foreach ($arrayFrutas as $value) {
        if (is_array($value)) {
            foreach ($value as $nombre => $value2) {
                echo '<p>' . $nombre . ' tiene color ' . $value2 . '</p>';
            }
        }
    }

    echo "<h3>Segunda manera de recorrer el array</h3>";
    foreach ($ArrayFrutasComplicado as $value) {
        if (is_array($value)) {
            $pinta='<p>';
            foreach ($value as $valor) {
                $pinta.=$valor. ':';
            }
            $pinta =$valor.'</p>';
            echo $pinta;
        }
    }


    ?>
</body>

</html>