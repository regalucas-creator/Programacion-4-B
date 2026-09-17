<?php

date_default_timezone_get("America/Salvador");


#dia meses y años en ingles
$fecha_us=date("1 d F Y");

#dia meses y años en españl
$fecha_es=date("d-m-Y");

#hora minutos 
$hora_12=date("h:i a");
$hora_24=date("H:i");

#todo lo anterior completo aca
$fecha_completa=date("l d F Y H:i A");
echo $fecha_completa;