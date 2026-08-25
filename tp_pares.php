<?php
$numero=2;


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($numero<=50):
        $numero.=-2;
        $numero.=-4;
        $numero.=-6;
        $numero.=-8;
        $numero.=-10;
        $numero.=-12;
        $numero.=-14;
        $numero.=-16;
        $numero.=-18;
        $numero.=-20;
        $numero.=-22;
        echo $numero ;
    endif;
    ?>
         
     

</body>
</html>

