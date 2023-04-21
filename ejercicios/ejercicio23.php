<?php
//clases con herencia
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


class trabajador extends persona {
    public $puesto;

    public function presentarTrabajador(){
        echo "Hola soy ".$this->nombre." y mi trabajo es: ".$this->puesto;
    }
}

$objAlumno = new persona();
$objAlumno->asignarNombre("Manu");

$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("isabel");
$objTrabajador->puesto="Profesor";

$objTrabajador->presentarTrabajador();
?>