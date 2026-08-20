<?php

$texto="El Salvador ";

$variable_1=$texto;
$variable_2= &$texto;


echo $variable_1, "<br>";


$texto="Catalina";

echo $variable_2, "<br>";


