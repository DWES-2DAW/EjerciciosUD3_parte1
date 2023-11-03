<?php class Empleado
{
    private $nombre;
    private $sueldo;
    private $numero_empleado;
    /** * Constructor */
    function __construct($nombre, $sueldo, $numero_empleado)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->numero_empleado = $numero_empleado;
    }

    /** * Get the value of nombre */
    public function getNombre()
    {
        return $this->nombre;
    }
    /** * Set the value of nombre * */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    /** * Get the value of sueldo */
    public function getSueldo()
    {
        return $this->sueldo;
    }
    /** * Set the value of sueldo * */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
    /** * Get the value of numero */
    public function getNumero()
    {
        return $this->numero_empleado;
    }

    public function impuestos()
    {
        if (($this->sueldo/12) > 1200) return true;
        else return false;
    }
}
$empleado1 = new Empleado('Guillermo', 10000, 123456789);
echo $empleado1->getNombre() . " tiene un sueldo de " . $empleado1->getSueldo() . "<br>";
$empleado1->setNombre('Guillermo Garrido');
$empleado1->setSueldo($empleado1->getSueldo()+($empleado1->getSueldo()*0.1));
if ($empleado1->impuestos()) {
    echo $empleado1->getNombre() . " tiene un sueldo de " . $empleado1->getSueldo() . " y debe pagar impuestos<br>";
} else {
    echo $empleado1->getNombre() . " no tiene que pagar impuestos<br>";
}


$empleado2 = new Empleado('Silvia', 20000, 987654321);
echo $empleado2->getNombre() . " tiene un sueldo de " . $empleado2->getSueldo() . "<br>";
$empleado2->setNombre('Silvia Argente');
$empleado2->setSueldo($empleado2->getSueldo()+($empleado2->getSueldo()*0.1));
if ($empleado2->impuestos()) {
    echo $empleado2->getNombre() . " tiene un sueldo de " .  $empleado2->getSueldo() . " y debe pagar impuestos<br>";
} else {
    echo $empleado2->getNombre() . " no tiene que pagar impuestos<br>";
}
