<?php

#primer ejemplo

$cantidad = 4;

if ($cantidad > 5):

    $total= $cantidad * 800;

else: 

    $total= $cantidad * 700;

endif;

echo "El total a pagar es de : " . $total;


#segundo ejemplo

$calificaciones_1 = 6;
$calificaciones_2 = 5;
$calificaciones_3 = 4;

$promedio = ($calificaciones_1 + $calificaciones_2 + $calificaciones_3) / 3;

if ($promedio >= 7):

    echo "Estudiante aprobado con calificacion de: " . $promedio;

else:

    echo "EEstudiante reprobado con calificacion de: " . $promedio;

endif;