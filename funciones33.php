<?php



#forma 1
function saludo(){
    echo "Hola mi nombre es: Carlos";
}


saludo();


#forma 2

function saludo(){
    echo "Hola mi nombre es: Carlos";
}

$saludo=saludo();

echo $saludo;


#forma 3 

function saludo(){
    return "Hola mi nombre es: Carlos";
}


$saludo=saludo();


#forma 4

function saludo($nombre){
    echo "Hola mi nombre es: $nombre";
}


echo saludo("Nicole");

$usuario="Aslhey";
echo saludo($usuario);

echo saludo($nombre="Carlos");

#promedio

function promedio_alumno($nota_1,$nota_2,$nota_3){
    $promedio=($nota_1,$nota_2,$nota_3)/3;
    return $promedio;
}

$promedio=promedio_alumno(7,9,6);
echo "El promedio es ";


#forma 4 
function promedio_alumno($nota_1,$nota_2,$nota_3){
    $promedio=($nota_1,$nota_2,$nota_3)/3;
    return $promedio;
}


echo "El promedio es".promedio_alumno(7,9,6);
echo "<br>";
echo "El promedio es".promedio_alumno(8,2,6);
echo "<br>";
echo "El promedio es".promedio_alumno(9,4,5);
echo "<br>";
echo "El promedio es".promedio_alumno(1,10,8);
echo "<br>";
