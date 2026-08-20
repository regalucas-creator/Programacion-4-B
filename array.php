<?php

# Array de tipo escalar
$estudiantes=array("Carlos","Vanessa","Jose","Katy");


# Array de tipo asicociativo
$tutor=[
    "Nombre"=>"Carlos",
    "Apellido"=>"Alfaro",
    "Edad"=>"25"
    ];


    # Array de multiples dimensiones
$tutor_2=[
    "Nombre"=>"Vanessa",
    "Apellido"=>"Calles",
    "Edad"=>"22",
    "Cursos"=>["PHP","Phyton","CSS"]
    ];



# Array de multiples dimensiones
$tutor_2=[
"Nombre"=>"Vanessa",
    "Apellido"=>"Calles",
    "Edad"=>"22",
    "Cursos"=>["Nombre"=>"Carlos","Apellido"=>"Alfaro","Edad"=>"25"]
];


echo count($estudiantes);

echo count($tutor_2,COUNT_RECURSIVE);
