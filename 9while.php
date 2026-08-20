<?php

$c=3500;
$pedido_contador = 1;

while($c<=35000){

    echo "Pedido " . $pedido_contador . ": $" . $c . "<br>";
    $pedido_contador++;

    $c=$c+3500;

}