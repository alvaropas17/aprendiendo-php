<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 7 - Tablas de multiplicar</title>
</head>
<body>
    <h1>Tablas de multiplicar</h1>

    <?php 

    for ($i=1; $i < 6; $i++) { 
        # code...
        echo "<h2>Tabla de multiplicar del " . $i . "<br></h2>";
        for ($a=0; $a < 10; $a++) { 
            # code...
            $mult = $i*$a;
            // echo "<br>";
            echo $i . " * " . $a . " = " . $mult . "<br>";
        }
    }

    ?>
</body>
</html>