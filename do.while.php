<?php


#crecimiento
$c=1;

do{
    echo $c."<br>";
    $c++;
}while($c<=20);

#decremento
$c=20;

do{
    echo $c."<br>";
    $c--;
}while($c>=1);

#tabla de multiplicar crecimiento
$c=1;
$num=5;

do{
    echo $num." x ".$c." = ".$num*$c."<br>";
    $c++;
}while($c<=12);


#tabla de multiplicar decrecimiento
$c=12;
$num=7;

do{
    echo $num." x ".$c." = ".$num*$c."<br>";
    $c--;
}while($c>=1);
