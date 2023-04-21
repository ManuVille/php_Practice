<?php

$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM `fotos`";

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    print_r($resultado);//una forma de imprimir

    foreach($resultado as $foto){//otra forma de imprimir arreglos especificos
        print_r($foto['nombre']);
    }

    echo "Conexion Exitosa";

}catch(PDOException $error){
    echo "Conexion Fallida.".$error;
}

?>