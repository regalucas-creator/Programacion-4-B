<?php


#redondea hacia arriba


$cantidad1=12732.77;
$cantidad2=1931.81;

number_format(cantidad,decimales,sep_decimal,sep_millar);

echo number_format($cantidad1)."<br>";

#le suma un cero 

$cantidad1=12732.77;
$cantidad2=1931.81;

number_format(cantidad,decimales,sep_decimal,sep_millar);

$cantidad1= number_format($cantidad1,2)."<br>";

#le saca el numero anterior 
$cantidad1=12732.77;
$cantidad2=1931.81;

number_format(cantidad,decimales,sep_decimal,sep_millar);

$cantidad1= number_format($cantidad1,1)."<br>";

#le saca el decimal
$cantidad1=12732.77;
$cantidad2=1931.81;

number_format(cantidad,decimales,sep_decimal,sep_millar);

$cantidad1= number_format($cantidad1,0)."<br>";