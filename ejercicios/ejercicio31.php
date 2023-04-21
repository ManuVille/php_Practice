<?php

$jsonContenido = '[
    {"nombre":"Manu", "apellido":"Vi"},
    {"nombre":"Isa", "apellido":"Ca"}
    ]';

    $resultado= json_decode($jsonContenido);// transforma el contenido de formato String a json
    //print_r($resultado);

    foreach($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."<br/>";
    }

?>