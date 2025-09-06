<?php
echo "hola mundo";

// Vamos a hacer variables
$name = "Álvaro";
// $name = 2;
$isDev = true;
$age = 20;
$newAge = $age . 1;
$output = "Hola \"$name\", con una edad de $age.";



$isOld = $age > 40;

//Esto es una variable global
define('Logo_URL', 'https://storage.googleapis.com/website-production/uploads/2017/10/stock-photo-guide-770x384.jpg');

const NOMBRE = 'Álvaro';

?>

<style>
    :root {
        color-scheme: light dark;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>


<?php if($isOld) : ?>
echo "<h2>Eres viejo, menos te queda para la jubilación</h2>";
<?
if($isOld){
    
} else if ($isDev) {
    echo "<h2>No eres viejo pero tienes </h2> " . $age . "<h2> y te falta calle.</h2>";
}


?>
<img src="<?= Logo_URL ?>" alt=" PHP logo" width="200">

<h1>
    <?= NOMBRE ?>
</h1>

