<?php

#forma1
$clave="holamundo123";

echo sha1($clave);

#forma2
$clave="holamundo123";

echo hash("md5", $clave);

foreach (hash_algos() as $algoritmos) {
    echo $algoritmos . " - ". hash($algoritmos, $clave) . "<br>";
}

#forma3

$clave="holamundo123";

echo password_hash($clave, PASSWORD_DEFAULT);

#forma4


$clave="holamundo123";

echo password_hash($clave, PASSWORD_BCRYPT, ['cost' => 10]);

#forma5

$clave="holamundo123";

$clave_procesada=password_hash($clave, PASSWORD_BCRYPT, ['cost' => 10]);

echo password_verify($clave, $clave_procesada);

#forma6

$clave="holamundo123";

$clave_procesada=password_hash($clave, PASSWORD_BCRYPT, ['cost' => 10]);

if (password_verify($clave, $clave_procesada)) {
    echo "La contraseñas coinciden.";
} 

#forma7

$clave="holamundo123";

$clave_procesada=password_hash($clave, PASSWORD_BCRYPT, ['cost' => 10]);

$clave2="holamundo1234";

if (password_verify($clave2, $clave_procesada)) {
    echo "La contraseñas coinciden.";
} else {
    echo "La contraseñas no coinciden.";
}