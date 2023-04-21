<?php
//clases con constructor
class persona {

    public $nombre;//propiedades/ atributos
    private $edad;
    protected $altura;

    function __construct($name){

        $this->nombre=$name;
    }


    public  function asignarNombre($nuevoNom){//acciones o metodos
        $this->nombre=$nuevoNom;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

$objAlumno = new persona("Manu");
//$objAlumno->asignarNombre("Manu");
$objAlumno->imprimirNombre();

?>