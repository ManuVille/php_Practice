<?php
//arreglos asociativos
 $frutas = array("f"=>"fresa", "m"=>"manzana", "p"=>"pera"); //cambio el indice '0' de fresa por 'f'

 print_r($frutas);


 echo $frutas["m"]."<br/>";

 foreach($frutas as $indice=>$valor){
    echo "La fruta: ".$valor." Tiene el indice: ".$indice.  "<br/>";
 }
?>