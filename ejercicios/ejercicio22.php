<?php
//clases
class persona {

    public $nombre;//propiedades/ atributos
    private $edad;
    protected $altura;

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

$objAlumno = new persona();
$objAlumno->asignarNombre("Manu");

$objAlumno->imprimirNombre();
echo $objAlumno->mostrarEdad();
?>