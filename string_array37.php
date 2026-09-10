<?php

#forma1

$fecha1="2021/11/29";
$fecha2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";



$array_fecha=explode("/",$fecha1);

echo $array_fecha[0];


#forma2


$fecha1="2021/11/29";
$fecha2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";



$array_fecha=explode("/",$fecha2);

echo $array_fecha[2];

#forma3


$fecha1="2021/11/29";
$fecha2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";



$array_fecha=explode("/",$numeros);

echo $array_fecha[1];


#forma4


$fecha1="2021/11/29";
$fecha2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";



$array_fecha=explode(" ",$numeros,2);

echo $array_fecha[1];

#forma5


$fecha1="2021/11/29";
$fecha2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";



$array_fecha=explode(" ",$numeros,-1);

echo $array_fecha[1];
