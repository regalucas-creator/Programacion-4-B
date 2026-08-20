<?php

#switch Frutas

$frutas="Fresas";

switch($frutas){ 
    case "Fresas";
    echo "Eres una Fresa";

    break;
    case "Pera";
    echo "Eres una Pera";

    break;
    default;
    echo "No eres ni Fresa ni Pera";
}


#Dias de la semana

$dia=1;

switch($dia){ 
    case 1;
    echo "Lunes";

    break;
    case 2;
    echo "Martes";

    break;
    case 3;
    echo "Miercoles";

    break;
    case 4 ;
    echo "Jueves";

    break;
    case 5 ;
    echo "Viernes";

    break;
    case 6;
    echo "Sabado";

    break;
    case 7;
    echo "Domingo";

    break;
    default;
    echo "introduce otro dia";
}