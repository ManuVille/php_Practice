<?php

$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, '2 prueba', 'foto1.jpg');";

    $conexion->exec($sql);

    echo "Conexion Exitosa";

}catch(PDOException $error){
    echo "Conexion Fallida.".$error;
}

?>