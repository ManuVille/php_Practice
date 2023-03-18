<?php


if($_GET){ //Si se recibio un POST se imprime


    //recibir informacion del formulario html (Metodo POST)
    $nombre=$_GET['nombre'];
    echo "Hola ".$nombre;

}


?>