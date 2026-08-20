<?php



$c=30000;
$cajas_contador = 12;

while($c>=2500){

    echo "Caja " . $cajas_contador . ": $" . $c . "<br>";
    $c=$c-2500;
    $cajas_contador--;

    

}