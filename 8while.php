<?php

$c=240000;
$entradas_contador = 20;

while($c>=12000){

    echo "Entrada " . $entradas_contador . ": $" . $c . "<br>";

    $entradas_contador--;

    $c=$c-12000;

}