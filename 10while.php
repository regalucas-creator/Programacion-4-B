<?php

$c=8000;
$pizza_contador = 1;

while($c<=64000){

    echo "Pizza " . $pizza_contador . ": $" . $c . "<br>";
    $pizza_contador++;

    $c=$c+8000;

}