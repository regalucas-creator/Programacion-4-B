<?php

#forma1-caracteres
$cadenadetexto="Hola Mundo";

$longitud=strlen ($cadenadetexto);

echo $longitud;


#forma2-caracteres

$cadenadetexto="Hola Mundo";


$longitud=strlen ($cadenadetexto);
echo strtoupper ($cadenadetexto);

echo $cadenadetexto." tiene ".$longitud;


#forma3-palabras

$cadenadetexto="Hola Mundo";

$palabras=str_word_count ($cadenadetexto);

echo strtoupper ($cadenadetexto);

echo $cadenadetexto." tiene ".$palabras." palabras <br>";

