<?php

    
$precios=intval(10);

$productos = [
    "Producto_1" => "Manzana 2500$",
    "Producto_2" => "Pera 3000$",
    "Producto_3" => "Banana 1500$",
    "Producto_4" => "Lechuga 2000$",
    "Producto_5" => "Naranja 1000$"
];

$stock = [
    "Producto_1" =>"50",
    "Producto_2" =>"30",
    "Producto_3" =>"20",
    "Producto_4" =>"40",
    "Producto_5" =>"60"
];



echo $productos["Producto_1"], " Stock: ", $stock["Producto_1"], "<br>";
echo $productos["Producto_2"], " Stock: ", $stock["Producto_2"], "<br>";
echo $productos["Producto_3"], " Stock: ", $stock["Producto_3"], "<br>";
echo $productos["Producto_4"], " Stock: ", $stock["Producto_4"], "<br>";
echo $productos["Producto_5"], " Stock: ", $stock["Producto_5"], "<br>";