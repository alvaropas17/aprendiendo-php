<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php 
    // Comentario de una línea
    /* Comentario 
    de varias 
    líneas */


    // $var = 'Álvaro';
    // $var = 5;
    // echo "Hola $var! <br>"; 
    
    // $var += 12.5; // $var = 5 + 12.5;
    // echo "Hola $var";


    // $nombre = "Álvaro";
    // $apellido = "Pastor";

    // $nombre_completo = $nombre . " " . $apellido;

    // echo $nombre_completo;


    // $var1 = "20";
    // $var2 = 15;
    // $var3 = " años";

    // $res1 = $var1 . $var2;
    // echo $res1 . "\n";

    // $res2 = $var2 . $var3;
    // echo $res2;



    // Funciones

    function doble(&$valor){ // Con & se convierte en valor por referencia
        $temp = $valor * 2; // Valor dentro de la función
        $valor = $temp;
        echo "El valor de temp en la función es $temp <br>";
        return $temp;
    }
    $temp = 4; // Valor fuera de la función

    $temp = doble($temp);
    // doble($temp);

    echo "El valor de temp es: $temp";


    function dividir(&$valor2){
        $variable = $valor2 / 2;
        $valor2 = $variable;
        echo "El valor de temp en la función es $valor2 <br>";
        // return $temp2;
    }
    $variable = 9;
    $temp2 = dividir($variable);

    echo "El valor de temp es: $temp2";

    
    
    
    ?>
    </h1>
</body>
</html>