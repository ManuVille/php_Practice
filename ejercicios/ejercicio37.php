<?php
//crear un archivo

$nombreArchivo="archivo.txt";

$contenidoArchivo="Hola, saludos";

$archivoACrear= fopen($nombreArchivo, "w"); //se pone en modo escritura sobre el documento

fwrite($archivoACrear, $contenidoArchivo);
fclose($archivoACrear);
?>