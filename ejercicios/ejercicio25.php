<?php
//metodos estaticos

class UnaClase{

    public static function unMetodo(){

        echo "Hola soy un metodo estatico";
    }

}

//$obj=new UnaClase();
//$obj->unMetodo();

UnaClase::unMetodo(); //lamada de metodo estatico sin instancia

?>