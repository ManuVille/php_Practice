<?php
session_start();//mantienen datos en las paginas mientras este abierta en el navegador

$_SESSION["usuario"]="manu";
$_SESSION["estatus"]="logueado";

echo "Sesion Iniciada.".":<br/>";
echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];



?>