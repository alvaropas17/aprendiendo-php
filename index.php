<?php

// Hay que hacer un ";" por cada instrucción
// echo "Hola, PHP";

/* Este es un comentario */


/*
echo "Hola, PHP";
echo "Hola, PHP";
echo "Hola, PHP";
echo "Hola, PHP";
echo "Hola, PHP";
*/

// Variables

$my_string = "Esto es una cadena de texto";
$my_string = "Cambio el valor de la cadena de texto";

// Para hacer un salto de línea
echo "Hola, PHP \n";
echo $my_string . "\n";
echo gettype($my_string) . "\n";

// Tipado dinámico
// $my_string = 6;
echo $my_string . " \n";
echo  gettype($my_string) . "\n";

$my_int = 6;
$my_int = $my_int * 4;
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$my_double = 6.5;
echo gettype($my_double) . "\n";
echo $my_int + $my_double . $my_string . "\n";


// Booleanos
$my_bool = true;
echo $my_bool . "\n"; // Para asignarle un valor al booleano tendríamos que hacer un if y asignarle el número

echo "El valor de mi integer es $my_int y el de mi boolean es $my_bool.\n";

// Constantes
const MY_CONSTANT = "Valor de la constante";
echo $MY_CONSTANT . "\n";
