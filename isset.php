<?php

$numero=NULL;

if(is_null($numero)){
    echo " es nula";

}else{
echo "no es nula";
}

#forma2
$numero="10";

unset($numero);

if(is_null($numero)){
    echo " es nula";

}else{
echo "no es nula";
}

#forma3
$numero="9";


if(empty($numero)){
    echo " esta vacia";

}else{
echo "no esta vacia";
}


#forma4
$numero=$_GET['numero'] ;


if(isset($numero)){
    echo " Esta definida";

}else{
echo "no esta definida";
}


#forma5
$numero="10" ;

unset($numero);

if(isset($numero)){
    echo " Esta definida";

}else{
echo "no esta definida";
}