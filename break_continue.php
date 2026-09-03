<?php
$c=1;
while($c <= 20){
    echo $c."<br>";
if($c == 10){
    break;
}
$c++;
}

#EJ

$pc=["SO","SSD", "GPU", "RAM", "CPU"];
foreach($pc as $componente){
    if($componente == "GPU"){
        break;
    }

echo $componente."<br>";
}

#continue

$pc=["SO","SSD", "GPU", "RAM", "CPU"];
foreach($pc as $componente) {
    if($componente == "GPU"){
        continue;
    }

echo $componente."<br>";
}

#
$i=1;
mhile($i <= 10){
if($i == 3){
    $i++;
    continue;
}
echo $i."<br>";
$i++;
}
