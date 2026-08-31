<?php


#forma1
$laptop= ["Acer Nitro 5 ","Windows 11","AMD Ryzen 5 4600H","SSD 256GB","RAM 24GB"];

$frutas=[
    "Fresas" => 100,
    "Peras" => 30,
    "Sandias" => 10,
    "Melocotones" => 17,
    "Manzanas" => 9

];

foreach($laptop as $valor){
    echo $valor . "<br>";
}


#forma2

$laptop= ["Acer Nitro 5 ","Windows 11","AMD Ryzen 5 4600H","SSD 256GB","RAM 24GB"];

$frutas=[
    "Fresas" => 100,
    "Peras" => 30,
    "Sandias" => 10,
    "Melocotones" => 17,
    "Manzanas" => 9

];

foreach($laptop as $clave => $valor){
    echo $clave . " - " . $valor . "<br>";
}



#forma3

$laptop= ["Acer Nitro 5 ","Windows 11","AMD Ryzen 5 4600H","SSD 256GB","RAM 24GB"];

$frutas=[
    "Fresas" => 100,
    "Peras" => 30,
    "Sandias" => 10,
    "Melocotones" => 17,
    "Manzanas" => 9

];

foreach($laptop as $clave => $valor){
    echo "Hay " .$valor . " " . $clave . " en el inventario" . "<br>";
}


#forma4


$productos=[
    ["Codigo" =>  "A0001", "Descripcion" => "Mouse"],
    ["Codigo" => "A0002", "Descripcion" => "Teclado"],
    ["Codigo" =>  "A0003", "Descripcion" => "Monitor"],
    ["Codigo" =>  "A0004", "Descripcion" => "Impresor"]
    
];

foreach($productos as $prod){
    echo $prod["Codigo"] . " - " . $prod["Descripcion"] . "<br>";
}

