<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej Concesionario</title>
</head>

<body>
    <h2>Ejercicio 3</h2>
    <h3>Un concesionario de venta de coches de segunda mano que vende coches de distintas marcas, nos pide que hagamos una aplicación web que le muestre el número de coches en stock y vendidos de cada marca.
        Usando PHP, debemos crear un array que contenga la marca y tanto el número de coches vendidos como en stock para cada marca del concesionario y mostrar una página web que muestre una lista con los datos que nos pide el cliente.</h3>


    <?php

    /*
    Mostrar:
    - Marca
    - Número de coches vendidos como en stock

    Web donde se musetre una lista con los datos que pide el cliente
    */

    $concesionario = [

        ["Marca" => "Tesla", "vendidos" => "6", "stock" => "26"],
        ["Marca" => "Mercedes", "vendidos" => "12", "stock" => "14"],
        ["Marca" => "Audi", "vendidos" => "6", "stock" => "19"],
        ["Marca" => "BMW", "vendidos" => "18", "stock" => "23"]

    ];


    foreach ($datos as $value) {
        $marca = $value["Marca"];
        $vendidos = $value["vendidos"];
        $stock = $value["stock"];

        echo "<p>$marca ha vendido $vendidos coches y le quedan $stock en stock.</p>";
    }
    // else echo "<p>$datos</p>";



    ?>




</body>

</html>