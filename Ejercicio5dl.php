<?php

/* Crea una clase Empleado con 2 propiedades: nombre y sueldo (anual). Implementa los getters y setters
de las dos propiedades (ten en cuenta la visibilidad adecuada de las propiedades y métodos).
Crea dos empleados rellenando su nombre y sueldo, y haz que salga por pantalla la frase
“nombre_empleado tiene un sueldo de sueldo_empleado”.
Añadir un atributo numero_empleado que se rellenen en el momento en que se crea el empleado y no se
pueda modificar después.
Modificar el nombre añadiendo también el apellido en el atributo nombre e incrementar el sueldo un 10%
a cada empleado.
Añade un método a la clase Empleado que devolverá un booleano indicando si el empleado tiene que
pagar impuestos (si su sueldo es mayo que 1200 mensuales) o no (si es menor).
Muestra la frase “nombre_empleado tiene que pagar impuestos” o “nombre_empleado no tiene que
pagar impuestos” después de la frase “nombre_empleado tiene un sueldo de sueldo_empleado”.
 */

 class Empleado {

    private $nombre;
    private $sueldo;
    private $numero_empleado;
 
public function __construct($nombre, $sueldo, $numero_empleado)
    {
    $this->nombre=$nombre;
    $this->sueldo=$sueldo;
    $this->numero_empleado=$numero_empleado;
   }

public function getNombre() {

return $this->nombre;
}

public function setNombre($nombre){

    $this->nombre= $nombre;
}

public function getSueldo() {

   return $this->sueldo;
   }
   
public function setSueldo($sueldo){
   
       $this->sueldo= $sueldo;
   }
   
public function getNumero() {

      return $this->numero_empleado;
   
   }

public function salario(){

return $this->sueldo/12 > 1200;

}

 }


$empleado1 = new Empleado ('David',50000,05);

echo $empleado1->getNombre() . " tiene un sueldo de " . $empleado1->getSueldo() . "<br>";
$empleado1->setNombre('David Miró');
$empleado1->setSueldo($empleado1->getSueldo()+($empleado1->getSueldo()*0.1));
if ($empleado1->salario()) {
    echo $empleado1->getNombre() . " tiene un sueldo de " . $empleado1->getSueldo() . " y debe pagar impuestos<br>";
} else {
    echo $empleado1->getNombre() . " no tiene que pagar impuestos<br>";
}


 
