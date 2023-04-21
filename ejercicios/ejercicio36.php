<?php
//manejo de archivos
$archivo="contenido.txt";


$archivoAbierto=fopen($archivo, "r");//abriendo archivos

$contenido=fread($archivoAbierto, filesize($archivo)); //leemos el contenido y veo su tamanio

echo $contenido;



?>