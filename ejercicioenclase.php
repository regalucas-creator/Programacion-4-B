<?php




$Partido_de_argentina_1=3;
$Partido_de_argentina_2=3;
$Partido_de_argentina_3=3;


$Partido_de_jordania_1=0;
$Partido_de_jordania_2=3;
$Partido_de_jordania_3=0;


$Partido_de_austria_1=3;
$Partido_de_austria_2=0;
$Partido_de_austria_3=0;


$Partido_de_argelia_1=0;
$Partido_de_argelia_2=3;
$Partido_de_argelia_3=3;

$argentina=$Partido_de_argentina_1+$Partido_de_argentina_2+$Partido_de_argentina_3;
$argelia=$Partido_de_argelia_1+$Partido_de_argelia_2+$Partido_de_argelia_3;
$austria=$Partido_de_austria_1+$Partido_de_austria_2+$Partido_de_austria_3;
$jordania=$Partido_de_jordania_1+$Partido_de_jordania_2+$Partido_de_jordania_3;


if ($argentina>=6):
    echo "Argentina pasa a la siguiente ronda","<br>";
else:
    echo "Argentina no pasa a la siguiente ronda";
endif;

if ($argelia>=6):
    echo "Argelia pasa a la siguiente ronda","<br>";
else:
    echo "Argelia no pasa a la siguiente ronda","<br>";
    endif;



if ($austria>=6):
    echo "Austria pasa a la siguiente ronda","<br>";
else:
    echo "Austria no pasa a la siguiente ronda","<br>";
    endif;


if ($jordania>=6):
    echo "Jordania pasa a la siguiente ronda","<br>";
else:
    echo "Jordania no pasa a la siguiente ronda","<br>";
    endif;